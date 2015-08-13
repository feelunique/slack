<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChatUpdatePayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class ChatUpdatePayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new ChatUpdatePayload();
        $payload->setChannelId('C1234567');
        $payload->setSlackTimestamp('12345678.12345678');
        $payload->setText('new_message');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param ChatUpdatePayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'channel' => $payload->getChannelId(),
            'ts'      => $payload->getSlackTimestamp(),
            'text'    => $payload->getText(),
        ];
    }
}
