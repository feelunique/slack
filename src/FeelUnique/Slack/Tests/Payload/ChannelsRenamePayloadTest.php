<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsRenamePayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class ChannelsRenamePayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new ChannelsRenamePayload();
        $payload->setChannelId('C1234567');
        $payload->setName('new_name');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param ChannelsRenamePayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'channel' => $payload->getChannelId(),
            'name'    => $payload->getName(),
        ];
    }
}
