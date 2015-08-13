<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\GroupsRenamePayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class GroupsRenamePayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new GroupsRenamePayload();
        $payload->setGroupId('G1234567');
        $payload->setName('new_name');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param GroupsRenamePayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'channel' => $payload->getGroupId(),
            'name'    => $payload->getName(),
        ];
    }
}
