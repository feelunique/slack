<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ImMarkPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class ImMarkPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new ImMarkPayload();
        $payload->setImId('I1234567');
        $payload->setSlackTimestamp('12345678.12345678');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param ImMarkPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'ts'      => $payload->getSlackTimestamp(),
            'channel' => $payload->getImId(),
        ];
    }
}
