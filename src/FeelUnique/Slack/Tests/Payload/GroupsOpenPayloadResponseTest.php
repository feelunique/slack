<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\GroupsOpenPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class GroupsOpenPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'no_op'        => true,
            'already_open' => true,
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                     $responseData
     * @param GroupsOpenPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertEquals($responseData['no_op'], $payloadResponse->isNoOp());
        $this->assertEquals($responseData['already_open'], $payloadResponse->isAlreadyOpen());
    }
}
