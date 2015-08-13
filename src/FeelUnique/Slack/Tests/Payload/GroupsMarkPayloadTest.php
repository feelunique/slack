<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\GroupsMarkPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class GroupsMarkPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new GroupsMarkPayload();
        $payload->setGroupId('G1234567');
        $payload->setSlackTimestamp('12345678.12345678');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param GroupsMarkPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'ts'      => $payload->getSlackTimestamp(),
            'channel' => $payload->getGroupId(),
        ];
    }
}
