<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\GroupsSetTopicPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class GroupsSetTopicPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new GroupsSetTopicPayload();
        $payload->setGroupId('G1234567');
        $payload->setTopic('new_topic');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param GroupsSetTopicPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'channel' => $payload->getGroupId(),
            'topic'   => $payload->getTopic(),
        ];
    }
}
