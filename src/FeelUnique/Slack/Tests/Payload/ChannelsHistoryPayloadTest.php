<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsHistoryPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class ChannelsHistoryPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new ChannelsHistoryPayload();
        $payload->setChannelId('C1234567');
        $payload->setCount(123);
        $payload->setOldest('12345678.12345678');
        $payload->setLatest('12345678.12345678');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param ChannelsHistoryPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'channel' => $payload->getChannelId(),
            'latest'  => $payload->getLatest(),
            'oldest'  => $payload->getOldest(),
            'count'   => $payload->getCount(),
        ];
    }
}
