<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsUnarchivePayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class ChannelsUnarchivePayloadResponseTest extends AbstractPayloadResponseTest
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
     * @param array                            $responseData
     * @param ChannelsUnarchivePayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
    }
}
