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
use GuzzleHttp\Subscriber\History;
use GuzzleHttp\Subscriber\Mock;


class ApiClientTest extends AbstractTestCase
{
    const TOKEN = 'fake-token';

    public function testSend()
    {
        $self             = $this;
        $eventsDispatched = [];
        $history          = new History();
        $mock             = new Mock();
        $mockRequestData  = [
            'foo'   => 'bar',
            'token' => self::TOKEN,
        ];
        $mockResponseData = [
            'ok'  => true,
            'foo' => 'bar',
        ];

        $mockPayload = new MockPayload();
        $mockPayload->setFoo('bar');

        $mockResponseBody = json_encode($mockResponseData);
        $mock->addResponse(sprintf(
            "HTTP/1.1 200 OK\r\nContent-Length: %d\r\n\r\n%s",
            strlen($mockResponseBody),
            $mockResponseBody
        ));

        $client = new Client();
        $client->getEmitter()->attach($history);
        $client->getEmitter()->attach($mock);

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

        $lastRequest = $history->getLastRequest();
        $expectedUrl = ApiClient::API_BASE_URL . 'mock';
        parse_str($lastRequest->getBody()->__toString(), $lastRequestContent);
        $lastResponseContent = json_decode($history->getLastResponse()->getBody(), true);

        $this->assertEquals($mockRequestData, $lastRequestContent);
        $this->assertEquals($mockResponseData, $lastResponseContent);
        $this->assertEquals($expectedUrl, $history->getLastRequest()->getUrl());

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
