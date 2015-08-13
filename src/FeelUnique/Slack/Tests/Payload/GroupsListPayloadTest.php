<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\GroupsListPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class GroupsListPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new GroupsListPayload();
        $payload->setExcludeArchived(true);

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param GroupsListPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'exclude_archived' => $payload->isExcludeArchived(),
        ];
    }
}
