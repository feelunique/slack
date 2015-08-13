<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\GroupsLeavePayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class GroupsLeavePayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new GroupsLeavePayload();
        $payload->setGroupId('G1234567');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param GroupsLeavePayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'channel' => $payload->getGroupId(),
        ];
    }
}
