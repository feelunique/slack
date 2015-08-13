<?php

namespace FeelUnique\Slack\Tests\Serializer;

use FeelUnique\Slack\Serializer\PayloadResponseSerializer;
use FeelUnique\Slack\Tests\AbstractTestCase;


class PayloadResponseSerializerTest extends AbstractTestCase
{
    /**
     * @var PayloadResponseSerializer
     */
    private $payloadResponseSerializer;

    protected function setUp()
    {
        $this->payloadResponseSerializer = new PayloadResponseSerializer();
    }

    public function testDeserialize()
    {
        $payloadResponse = [
            'ok'     => true,
            'error'  => null,
            'result' => [],
        ];

        $mockResponseClass = 'FeelUnique\Slack\Test\Payload\MockPayloadResponse';
        $serializedPayload = $this->payloadResponseSerializer->deserialize(
            $payloadResponse,
            $mockResponseClass
        );

        $this->assertInstanceOf($mockResponseClass, $serializedPayload);
        $this->assertTrue($serializedPayload->isOk());
        $this->assertNull($serializedPayload->getError());
        $this->assertNull($serializedPayload->getErrorExplanation());
    }
}
