<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\GroupsClosePayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class GroupsClosePayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'no_op'        => true,
            'already_closed' => true,
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                      $responseData
     * @param GroupsClosePayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertEquals($responseData['no_op'], $payloadResponse->isNoOp());
        $this->assertEquals($responseData['already_closed'], $payloadResponse->isAlreadyClosed());
    }
}
