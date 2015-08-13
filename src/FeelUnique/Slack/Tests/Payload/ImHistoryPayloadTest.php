<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ImHistoryPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class ImHistoryPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new ImHistoryPayload();
        $payload->setImId('I1234567');
        $payload->setCount(10);
        $payload->setOldest('12345678.12345678');
        $payload->setLatest('12345678.12345678');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param ImHistoryPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'channel' => $payload->getImId(),
            'latest'  => $payload->getLatest(),
            'oldest'  => $payload->getOldest(),
            'count'   => $payload->getCount(),
        ];
    }
}
