<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\AuthTestPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class AuthTestPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new AuthTestPayload();

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param AuthTestPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [];
    }
}
