<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\PayloadInterface;
use FeelUnique\Slack\Payload\SearchFilesPayload;


class SearchFilesPayloadTest extends AbstractSearchPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new SearchFilesPayload();

        return parent::createPayload($payload);
    }

    /**
     * {@inheritdoc}
     *
     * @param SearchFilesPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return parent::getExpectedPayloadData($payload);
    }
}
