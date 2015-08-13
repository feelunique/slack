<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\PayloadResponseInterface;
use FeelUnique\Slack\Payload\UsersInfoPayloadResponse;


class UsersInfoPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'user' => $this->createUser(),
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                    $responseData
     * @param UsersInfoPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertUser($responseData['user'], $payloadResponse->getUser());
    }
}
