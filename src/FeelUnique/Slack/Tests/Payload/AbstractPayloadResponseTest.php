<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\PayloadResponseInterface;
use FeelUnique\Slack\Serializer\PayloadResponseSerializer;
use FeelUnique\Slack\Tests\AbstractTestCase;


abstract class AbstractPayloadResponseTest extends AbstractTestCase
{
    /**
     * @var PayloadResponseSerializer
     */
    private $serializer;

    protected function setUp()
    {
        $this->serializer = new PayloadResponseSerializer();
    }

    public function testPayloadResponse()
    {
        $responseData = array_merge(['ok' => true], $this->createResponseData());

        /** @var PayloadResponseInterface $actualPayloadResponse */
        $actualPayloadResponse = $this->serializer->deserialize(
            $responseData,
            $this->getResponseClass()
        );

        $this->assertInstanceOf('FeelUnique\Slack\Payload\PayloadResponseInterface', $actualPayloadResponse);
        $this->assertInstanceOf($this->getResponseClass(), $actualPayloadResponse);
        $this->assertEquals($responseData['ok'], $actualPayloadResponse->isOk());
        if (array_key_exists('error', $responseData)) {
            $this->assertEquals($responseData['error'], $actualPayloadResponse->getError());
            $this->assertInternalType('string', $actualPayloadResponse->getErrorExplanation());
        }
        $this->assertResponse($responseData, $actualPayloadResponse);
    }

    /**
     * Compares the expected response data against the values returned by the actual Response's methods
     *
     * @param array                    $responseData
     * @param PayloadResponseInterface $payloadResponse
     */
    abstract protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse);

    /**
     * Returns the response class used for this test-case
     * Can be overwritten if it deviates from the standard pattern
     */
    protected function getResponseClass()
    {
        $class = get_class($this);
        $name  = substr($class, strripos($class, '\\') + 1, -4);

        return sprintf('FeelUnique\Slack\Payload\%s', $name);
    }

    /**
     * Returns the data used for comparison against the actual Response class
     *
     * @return array
     */
    abstract public function createResponseData();
}
