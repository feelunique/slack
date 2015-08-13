<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChatDeletePayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class ChatDeletePayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new ChatDeletePayload();
        $payload->setChannelId('C1234567');
        $payload->setSlackTimestamp('12345678');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param ChatDeletePayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'channel' => $payload->getChannelId(),
            'ts'      => $payload->getSlackTimestamp(),
        ];
    }
}
