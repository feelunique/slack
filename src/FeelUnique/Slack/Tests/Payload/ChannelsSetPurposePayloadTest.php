<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsSetPurposePayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class ChannelsSetPurposePayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new ChannelsSetPurposePayload();
        $payload->setChannelId('C1234567');
        $payload->setPurpose('new_purpose');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param ChannelsSetPurposePayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'channel' => $payload->getChannelId(),
            'purpose' => $payload->getPurpose(),
        ];
    }
}
