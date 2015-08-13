<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\UsersInfoPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class UsersInfoPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new UsersInfoPayload();
        $payload->setUserId('U1234567');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param UsersInfoPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'user' => $payload->getUserId(),
        ];
    }
}
