<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsArchivePayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class ChannelsArchivePayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'channel' => 'acme_channel',
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                          $responseData
     * @param ChannelsArchivePayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
    }
}
