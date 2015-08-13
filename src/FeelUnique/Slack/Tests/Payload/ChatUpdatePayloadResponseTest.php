<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChatUpdatePayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class ChatUpdatePayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'channel' => 'C1234567',
            'ts'      => '12345678.12345678',
            'text'    => 'Hello World!',
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                     $responseData
     * @param ChatUpdatePayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertEquals($responseData['channel'], $payloadResponse->getChannelId());
        $this->assertEquals($responseData['ts'], $payloadResponse->getSlackTimestamp());
        $this->assertEquals($responseData['text'], $payloadResponse->getText());
    }
}
