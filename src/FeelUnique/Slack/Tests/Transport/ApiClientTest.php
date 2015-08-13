<?php

namespace FeelUnique\Slack\Tests\Transport;

use FeelUnique\Slack\Exception\SlackException;
use FeelUnique\Slack\Payload\PayloadInterface;
use FeelUnique\Slack\Test\Payload\MockPayload;
use FeelUnique\Slack\Tests\AbstractTestCase;
use FeelUnique\Slack\Transport\ApiClient;
use FeelUnique\Slack\Transport\Events\RequestEvent;
use FeelUnique\Slack\Transport\Events\ResponseEvent;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;


class ApiClientTest extends AbstractTestCase
{
    const TOKEN = 'fake-token';

    public function testSend()
    {
        $self             = $this;
        $eventsDispatched = [];
        $mockResponseData = [
            'ok'  => true,
            'foo' => 'bar',
        ];
        $mockResponseBody = json_encode($mockResponseData);

        $container        = [];
        $history          = Middleware::history($container);
        $mockHandler      = new MockHandler([
            new Response(200, [
                'Content-Length' => strlen($mockResponseBody)
            ], $mockResponseBody)
        ]);
        $handler = HandlerStack::create($mockHandler);
        $handler->push($history);
        $mockRequestData  = [
            'foo'   => 'bar',
            'token' => self::TOKEN,
        ];
        $client = new Client(['handler' => $handler]);

        $mockPayload = new MockPayload();
        $mockPayload->setFoo('bar');

        $apiClient = new ApiClient(self::TOKEN, $client);
        $apiClient->addRequestListener(function (RequestEvent $event) use (&$eventsDispatched, $mockRequestData, $self) {
            $eventsDispatched[ApiClient::EVENT_REQUEST] = true;
            $self->assertEquals($mockRequestData, $event->getRawPayload());
        });

        $apiClient->addResponseListener(function (ResponseEvent $event) use (&$eventsDispatched, $mockResponseData, $self) {
            $eventsDispatched[ApiClient::EVENT_RESPONSE] = true;
            $self->assertEquals($mockResponseData, $event->getRawPayloadResponse());
        });

        $apiClient->send($mockPayload);

        $countHistory = count($container);
        $this->assertEquals(1, $countHistory);

        /** @var RequestInterface $lastRequest */
        $lastRequest = $container[0]['request'];
        /** @var ResponseInterface $lastRequest */
        $lastResponse = $container[0]['response'];
        $expectedUrl = ApiClient::API_BASE_URL . 'mock';
        parse_str($lastRequest->getBody()->__toString(), $lastRequestContent);
        $lastResponseContent = json_decode($lastResponse->getBody(), true);

        $this->assertEquals($mockRequestData, $lastRequestContent);
        $this->assertEquals($mockResponseData, $lastResponseContent);
        $this->assertEquals($expectedUrl, $lastRequest->getUri()->__toString());

        $this->assertArrayHasKey(ApiClient::EVENT_REQUEST, $eventsDispatched);
        $this->assertArrayHasKey(ApiClient::EVENT_RESPONSE, $eventsDispatched);
    }

    public function testSendWithoutAnyToken()
    {
        /** @var PayloadInterface|\PHPUnit_Framework_MockObject_MockObject $mockPayload */
        $mockPayload = $this->getMock('FeelUnique\Slack\Payload\PayloadInterface');
        $apiClient   = new ApiClient();

        try {
            $apiClient->send($mockPayload);
        } catch (SlackException $e) {
            $previous = $e->getPrevious();
            $this->assertInstanceOf('\InvalidArgumentException', $previous);
            $this->assertEquals(
                'You must supply a token to send a payload, since you did not provide one during construction',
                $previous->getMessage()
            );

            return;
        }

        $this->markTestIncomplete('This test should have thrown an exception');
    }
}
