<?php

namespace FeelUnique\Slack\Tests\Serializer;

use FeelUnique\Slack\Test\Payload\MockPayload;
use FeelUnique\Slack\Tests\AbstractTestCase;
use FeelUnique\Slack\Serializer\PayloadSerializer;


class PayloadSerializerTest extends AbstractTestCase
{
    /**
     * @var PayloadSerializer
     */
    private $payloadSerializer;

    protected function setUp()
    {
        $this->payloadSerializer = new PayloadSerializer();
    }

    public function testSerialize()
    {
        $payload = new MockPayload();
        $payload->setFoo('bar');

        $serializedPayload = $this->payloadSerializer->serialize($payload);

        $this->assertInternalType('array', $serializedPayload);
        $this->assertArrayHasKey('foo', $serializedPayload);
        $this->assertEquals('bar', $serializedPayload['foo']);
    }
}
