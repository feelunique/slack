<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChatDeletePayload;
use FeelUnique\Slack\Payload\PayloadInterface;
use FeelUnique\Slack\Payload\UsersSetActivePayload;


class UsersSetActivePayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new UsersSetActivePayload();

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param ChatDeletePayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [];
    }
}
