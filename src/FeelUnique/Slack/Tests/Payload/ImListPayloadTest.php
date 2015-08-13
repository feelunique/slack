<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ImListPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class ImListPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new ImListPayload();
        $payload->setExcludeArchived(true);

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param ImListPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'exclude_archived' => $payload->isExcludeArchived(),
        ];
    }
}
