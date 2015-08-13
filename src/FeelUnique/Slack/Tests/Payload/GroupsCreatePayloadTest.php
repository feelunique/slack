<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\GroupsCreatePayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class GroupsCreatePayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new GroupsCreatePayload();
        $payload->setName('acme_channel');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param GroupsCreatePayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'name' => $payload->getName(),
        ];
    }
}
