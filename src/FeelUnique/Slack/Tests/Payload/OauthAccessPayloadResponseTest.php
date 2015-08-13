<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\OauthAccessPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class OauthAccessPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'access_token' => 'xoxt-23984754863-2348975623103',
            'scope'        => 'read',
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                      $responseData
     * @param OauthAccessPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertEquals($responseData['access_token'], $payloadResponse->getAccessToken());
        $this->assertEquals($responseData['scope'], $payloadResponse->getScope());
    }
}
