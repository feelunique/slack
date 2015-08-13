<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\EmojiListPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class EmojiListPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new EmojiListPayload();

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param EmojiListPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [];
    }
}
