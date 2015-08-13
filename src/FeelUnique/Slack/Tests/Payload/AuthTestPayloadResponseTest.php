<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\AuthTestPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class AuthTestPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'user'    => 'acme_user',
            'user_id' => 'U1234567',
            'team'    => 'acme_team',
            'team_id' => 'T1234567',
            'url'     => 'https://acme.slack.com/user/U1234567',
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                   $responseData
     * @param AuthTestPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertEquals($payloadResponse->getUserId(), $responseData['user_id']);
        $this->assertEquals($payloadResponse->getUsername(), $responseData['user']);
        $this->assertEquals($payloadResponse->getTeamId(), $responseData['team_id']);
        $this->assertEquals($payloadResponse->getTeam(), $responseData['team']);
        $this->assertEquals($payloadResponse->getUrl(), $responseData['url']);
    }
}
