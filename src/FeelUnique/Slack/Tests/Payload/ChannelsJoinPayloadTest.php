<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsJoinPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class ChannelsJoinPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new ChannelsJoinPayload();
        $payload->setChannel('#acme_channel');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param ChannelsJoinPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'name' => $payload->getChannel(),
        ];
    }
}
