<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsSetPurposePayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class ChannelsSetPurposePayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'purpose' => 'new_purpose',
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                             $responseData
     * @param ChannelsSetPurposePayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertEquals($responseData['purpose'], $payloadResponse->getPurpose());
    }
}
