<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ImClosePayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class ImClosePayloadResponseTest extends AbstractPayloadResponseTest
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
     * @param array                  $responseData
     * @param ImClosePayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertEquals($responseData['no_op'], $payloadResponse->isNoOp());
        $this->assertEquals($responseData['already_closed'], $payloadResponse->isAlreadyClosed());
    }
}
