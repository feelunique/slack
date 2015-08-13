<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\UsersListPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class UsersListPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new UsersListPayload();

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param UsersListPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [];
    }
}
