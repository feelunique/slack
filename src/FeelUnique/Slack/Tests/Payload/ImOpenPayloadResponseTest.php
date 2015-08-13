<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ImOpenPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class ImOpenPayloadResponseTest extends AbstractPayloadResponseTest
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
     * @param array                 $responseData
     * @param ImOpenPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertEquals($responseData['no_op'], $payloadResponse->isNoOp());
        $this->assertEquals($responseData['already_open'], $payloadResponse->isAlreadyOpen());
    }
}
