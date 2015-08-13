<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsJoinPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class ChannelsJoinPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'already_in_channel' => true,
            'channel'            => $this->createChannel(),
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                       $responseData
     * @param ChannelsJoinPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertChannel($responseData['channel'], $payloadResponse->getChannel());
        $this->assertEquals($responseData['already_in_channel'], $payloadResponse->isAlreadyInChannel());
    }
}
