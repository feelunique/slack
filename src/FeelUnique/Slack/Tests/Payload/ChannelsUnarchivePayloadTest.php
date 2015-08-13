<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsUnarchivePayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class ChannelsUnarchivePayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new ChannelsUnarchivePayload();
        $payload->setChannelId('C1234567');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param ChannelsUnarchivePayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'channel' => $payload->getChannelId(),
        ];
    }
}
