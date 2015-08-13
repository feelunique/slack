<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsInfoPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class ChannelsInfoPayloadResponseTest extends AbstractPayloadResponseTest
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
     * @param array                       $responseData
     * @param ChannelsInfoPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertChannel($responseData['channel'], $payloadResponse->getChannel());
    }
}
