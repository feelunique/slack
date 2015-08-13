<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsInvitePayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class ChannelsInvitePayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new ChannelsInvitePayload();
        $payload->setChannelId('C1234567');
        $payload->setUserId('U1234567');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param ChannelsInvitePayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'channel' => $payload->getChannelId(),
            'user'    => $payload->getUserId(),
        ];
    }
}
