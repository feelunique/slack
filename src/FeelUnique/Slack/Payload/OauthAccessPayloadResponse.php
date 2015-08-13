<?php

namespace FeelUnique\Slack\Payload;


class OauthAccessPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var string
     */
    private $accessToken;

    /**
     * @var string
     */
    private $scope;

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * {@inheritdoc}
     */
    protected function getPossibleErrors()
    {
        return array_merge(parent::getPossibleErrors(), [
            'invalid_client_id' => 'Value passed for client_id was invalid',
            'bad_client_secret' => 'Value passed for client_secret was invalid',
            'invalid_code'      => 'Value passed for code was invalid',
            'bad_redirect_uri'  => 'Value passed for redirect_uri did not match the redirect_uri in the original request',
        ]);
    }
}
