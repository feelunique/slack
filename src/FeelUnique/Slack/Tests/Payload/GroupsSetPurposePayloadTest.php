<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\GroupsSetPurposePayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class GroupsSetPurposePayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new GroupsSetPurposePayload();
        $payload->setGroupId('G1234567');
        $payload->setPurpose('new_purpose');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param GroupsSetPurposePayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'channel' => $payload->getGroupId(),
            'purpose' => $payload->getPurpose(),
        ];
    }
}
