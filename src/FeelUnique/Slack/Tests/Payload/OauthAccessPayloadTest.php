<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\OauthAccessPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class OauthAccessPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new OauthAccessPayload();

        $payload->setClientId('4b39e9-752c4');
        $payload->setClientSecret('33fea0113f5b1');
        $payload->setCode('ccdaa72ad');
        $payload->setRedirectUri('http://example.com');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param OauthAccessPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'client_id'     => $payload->getClientId(),
            'client_secret' => $payload->getClientSecret(),
            'code'          => $payload->getCode(),
            'redirect_uri'  => $payload->getRedirectUri(),
        ];
    }
}
