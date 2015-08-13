<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\GroupsHistoryPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class GroupsHistoryPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new GroupsHistoryPayload();
        $payload->setGroupId('G1234567');
        $payload->setCount(10);
        $payload->setOldest('12345678.12345678');
        $payload->setLatest('12345678.12345678');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param GroupsHistoryPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'channel' => $payload->getGroupId(),
            'latest'  => $payload->getLatest(),
            'oldest'  => $payload->getOldest(),
            'count'   => $payload->getCount(),
        ];
    }
}
