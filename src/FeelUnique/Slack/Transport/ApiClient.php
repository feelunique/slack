<?php

namespace FeelUnique\Slack\Transport;

use FeelUnique\Slack\Exception\SlackException;
use FeelUnique\Slack\Payload\PayloadInterface;
use FeelUnique\Slack\Payload\PayloadResponseInterface;
use FeelUnique\Slack\Serializer\PayloadSerializer;
use FeelUnique\Slack\Serializer\PayloadResponseSerializer;
use FeelUnique\Slack\Transport\Events\ResponseEvent;
use FeelUnique\Slack\Transport\Events\RequestEvent;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use Symfony\Component\HttpFoundation\Request as SfRequest;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;


class ApiClient implements ApiClientInterface
{
    /**
     * The (base) URL used for all communication with the Slack API.
     */
    const API_BASE_URL = 'https://slack.com/api/';

    /**
     * Event triggered just before it's sent to the Slack API
     * Any listeners are passed the request data (array) as the first argument
     */
    const EVENT_REQUEST = 'EVENT_REQUEST';

    /**
     * Event triggered just before it's sent to the Slack API
     * Any listeners are passed the response data (array) as the first argument
     */
    const EVENT_RESPONSE = 'EVENT_RESPONSE';

    /**
     * @var string|null
     */
    private $token;

    /**
     * @var PayloadSerializer
     */
    private $payloadSerializer;

    /**
     * @var PayloadResponseSerializer
     */
    private $payloadResponseSerializer;

    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     * @param string|null                   $token
     * @param ClientInterface|null          $client
     * @param EventDispatcherInterface|null $eventDispatcher
     */
    public function __construct(
        $token = null,
        ClientInterface $client = null,
        EventDispatcherInterface $eventDispatcher = null
    ) {
        $this->token                     = $token;
        $this->payloadSerializer         = new PayloadSerializer();
        $this->payloadResponseSerializer = new PayloadResponseSerializer();
        $this->client                    = $client ?: new Client();
        $this->eventDispatcher           = $eventDispatcher ?: new EventDispatcher();
    }

    /**
     * @param PayloadInterface $payload The payload to send
     * @param string|null      $token   Optional token to use during the API-call,
     *                                  defaults to the one configured during construction
     *
     * @throws SlackException If the payload could not be sent
     *
     * @return PayloadResponseInterface Actual class depends on the payload used,
     *                                  e.g. chat.postMessage will return an instance of ChatPostMessagePayloadResponse
     */
    public function send(PayloadInterface $payload, $token = null)
    {
        try {
            if ($token === null && $this->token === null) {
                throw new \InvalidArgumentException('You must supply a token to send a payload, since you did not provide one during construction');
            }

            $serializedPayload = $this->payloadSerializer->serialize($payload);
            $responseData      = $this->doSend($payload->getMethod(), $serializedPayload, $token);

            return $this->payloadResponseSerializer->deserialize($responseData, $payload->getResponseClass());
        } catch (\Exception $e) {
            throw new SlackException('Failed to send payload', null, $e);
        }
    }

    /**
     * @param callable $callable
     */
    public function addRequestListener($callable)
    {
        $this->eventDispatcher->addListener(self::EVENT_REQUEST, $callable);
    }

    /**
     * @param callable $callable
     */
    public function addResponseListener($callable)
    {
        $this->eventDispatcher->addListener(self::EVENT_RESPONSE, $callable);
    }

    /**
     * @param string      $method
     * @param array       $data
     * @param string|null $token
     *
     * @throws SlackException
     *
     * @return array
     */
    private function doSend($method, array $data, $token = null)
    {
        try {
            $data['token'] = $token ?: $this->token;

            $this->eventDispatcher->dispatch(self::EVENT_REQUEST, new RequestEvent($data));

            /** @var ResponseInterface $response */
            $response = $this->client->post(self::API_BASE_URL.$method, [
                RequestOptions::FORM_PARAMS => $data
            ]);
        } catch (\Exception $e) {
            throw new SlackException('Failed to send data to the Slack API', null, $e);
        }

        try {
            $responseData = json_decode($response->getBody(), true);
            if (!is_array($responseData)) {
                throw new \Exception(sprintf(
                    'Expected JSON-decoded response data to be of type "array", got "%s"',
                    gettype($responseData)
                ));
            }

            $this->eventDispatcher->dispatch(self::EVENT_RESPONSE, new ResponseEvent($responseData));

            return $responseData;
        } catch (\Exception $e) {
            throw new SlackException('Failed to process response from the Slack API', null, $e);
        }
    }
}
