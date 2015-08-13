<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsLeavePayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class ChannelsLeavePayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'not_in_channel' => true,
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                        $responseData
     * @param ChannelsLeavePayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertEquals($responseData['not_in_channel'], $payloadResponse->isNotInChannel());
    }
}
