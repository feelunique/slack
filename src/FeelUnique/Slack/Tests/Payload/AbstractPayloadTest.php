<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\PayloadInterface;
use FeelUnique\Slack\Serializer\PayloadSerializer;


abstract class AbstractPayloadTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PayloadSerializer
     */
    private $payloadSerializer;

    protected function setUp()
    {
        $this->payloadSerializer = new PayloadSerializer();
    }

    public function testPayload()
    {
        $payload = $this->createPayload();

        $this->assertInternalType('string', $payload->getMethod());
        $this->assertTrue(class_exists($payload->getResponseClass()));

        $expectedPayloadSerialized = json_encode($this->getExpectedPayloadData($payload));
        $actualPayloadSerialized   = json_encode($this->payloadSerializer->serialize($payload));

        $this->assertEquals(
            json_decode($expectedPayloadSerialized, true),
            json_decode($actualPayloadSerialized, true)
        );
    }

    /**
     * @return PayloadInterface
     */
    abstract protected function createPayload();

    /**
     * @param PayloadInterface $payload
     *
     * @return array
     */
    abstract protected function getExpectedPayloadData(PayloadInterface $payload);
}
