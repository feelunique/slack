<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsMarkPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class ChannelsMarkPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new ChannelsMarkPayload();
        $payload->setChannelId('C1234567');
        $payload->setSlackTimestamp('12345678');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param ChannelsMarkPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'channel' => $payload->getChannelId(),
            'ts'      => $payload->getSlackTimestamp(),
        ];
    }
}
