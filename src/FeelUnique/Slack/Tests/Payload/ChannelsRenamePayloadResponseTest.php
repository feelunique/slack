<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsRenamePayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class ChannelsRenamePayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'channel' => $this->createChannel(),
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                         $responseData
     * @param ChannelsRenamePayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertChannel($responseData['channel'], $payloadResponse->getChannel());
    }
}
