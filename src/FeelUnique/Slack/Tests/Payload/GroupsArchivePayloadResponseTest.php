<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\GroupsArchivePayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class GroupsArchivePayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                        $responseData
     * @param GroupsArchivePayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
    }
}
