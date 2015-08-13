<?php

namespace FeelUnique\Slack\Test\Transport;

use FeelUnique\Slack\Payload\PayloadInterface;
use FeelUnique\Slack\Payload\PayloadResponseInterface;
use FeelUnique\Slack\Serializer\PayloadResponseSerializer;
use FeelUnique\Slack\Tests\Payload\AbstractPayloadResponseTest;
use FeelUnique\Slack\Transport\ApiClientInterface;

/**
 * MockApiClient
 *
 * This class can be used by other packages to test interaction with
 * the Slack API without actually connecting to it.
 *
 * If the '$succesful' argument is true while calling 'send()',
 * responses are given mocked data to mimic the behaviour of a real response.
 *
 * Conversely, if the $successful argument is false, the responses are given a mock error
 * and will therefore return false on `isOk()` calls, just like the real scenario.
 */
class MockApiClient implements ApiClientInterface
{
    /**
     * @var PayloadResponseSerializer
     */
    private $payloadResponseSerializer;

    public function __construct()
    {
        $this->payloadResponseSerializer = new PayloadResponseSerializer();
    }

    /**
     * {@inheritdoc}
     *
     * @param bool $successful Whether a successful response should be mocked, or a failed one
     */
    public function send(PayloadInterface $payload, $token = null, $successful = true)
    {
        if ($successful) {
            return $this->sendWithSuccess($payload);
        }

        return $this->sendWithFailure($payload);
    }

    /**
     * @param PayloadInterface $payload
     *
     * @return PayloadResponseInterface
     */
    private function sendWithSuccess(PayloadInterface $payload)
    {
        $payloadBaseName          = (new \ReflectionClass($payload))->getShortName();
        $payloadResponseTestClass = sprintf('FeelUnique\Slack\Tests\Payload\%sResponseTest', $payloadBaseName);

        /** @var AbstractPayloadResponseTest $payloadResponseTestObject */
        $payloadResponseTestObject = new $payloadResponseTestClass();

        $responseData = array_merge(
            $payloadResponseTestObject->createResponseData(),
            ['ok' => true]
        );

        return $this->payloadResponseSerializer->deserialize(
            $responseData,
            $this->getResponseClass($payload)
        );
    }

    /**
     * @param PayloadInterface $payload
     *
     * @return PayloadResponseInterface
     */
    private function sendWithFailure(PayloadInterface $payload)
    {
        $responseData = ['ok' => false, 'error' => 'faked.error'];

        return $this->payloadResponseSerializer->deserialize($responseData, $this->getResponseClass($payload));
    }

    /**
     * @param PayloadInterface $payload
     *
     * @return string
     */
    private function getResponseClass(PayloadInterface $payload)
    {
        $payloadBaseName      = (new \ReflectionClass($payload))->getShortName();
        $payloadResponseClass = sprintf('FeelUnique\Slack\Payload\%sResponse', $payloadBaseName);

        return $payloadResponseClass;
    }
}
