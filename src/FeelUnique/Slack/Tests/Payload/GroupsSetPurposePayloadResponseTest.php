<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\GroupsSetPurposePayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class GroupsSetPurposePayloadResponseTest extends AbstractPayloadResponseTest
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
     * @param array                           $responseData
     * @param GroupsSetPurposePayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertEquals($responseData['purpose'], $payloadResponse->getPurpose());
    }
}
