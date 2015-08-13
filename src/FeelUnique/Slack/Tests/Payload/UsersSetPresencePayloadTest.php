<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\UsersSetPresencePayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class UsersSetPresencePayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new UsersSetPresencePayload();
        $payload->setPresence('my');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param UsersSetPresencePayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'presence' => $payload->getPresence(),
        ];
    }
}
