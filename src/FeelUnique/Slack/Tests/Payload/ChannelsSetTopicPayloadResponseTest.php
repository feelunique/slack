<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsSetTopicPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class ChannelsSetTopicPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'topic' => 'new_topic',
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                           $responseData
     * @param ChannelsSetTopicPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertEquals($responseData['topic'], $payloadResponse->getTopic());
    }
}
