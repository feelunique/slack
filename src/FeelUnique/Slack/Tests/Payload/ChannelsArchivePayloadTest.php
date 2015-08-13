<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsArchivePayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class ChannelsArchivePayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new ChannelsArchivePayload();
        $payload->setChannelId('C1234567');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param ChannelsArchivePayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'channel' => $payload->getChannelId(),
        ];
    }
}
