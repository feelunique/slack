<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\GroupsSetTopicPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class GroupsSetTopicPayloadResponseTest extends AbstractPayloadResponseTest
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
     * @param array                         $responseData
     * @param GroupsSetTopicPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertEquals($responseData['topic'], $payloadResponse->getTopic());
    }
}
