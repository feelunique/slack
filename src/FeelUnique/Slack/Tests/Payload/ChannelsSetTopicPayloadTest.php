<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsSetTopicPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class ChannelsSetTopicPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new ChannelsSetTopicPayload();
        $payload->setChannelId('C1234567');
        $payload->setTopic('new_topic');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param ChannelsSetTopicPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'channel' => $payload->getChannelId(),
            'topic'   => $payload->getTopic(),
        ];
    }
}
