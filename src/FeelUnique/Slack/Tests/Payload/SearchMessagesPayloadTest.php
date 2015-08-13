<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\PayloadInterface;
use FeelUnique\Slack\Payload\SearchMessagesPayload;


class SearchMessagesPayloadTest extends AbstractSearchPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new SearchMessagesPayload();

        return parent::createPayload($payload);
    }

    /**
     * {@inheritdoc}
     *
     * @param SearchMessagesPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return parent::getExpectedPayloadData($payload);
    }
}
