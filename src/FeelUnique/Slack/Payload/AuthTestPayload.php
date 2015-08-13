<?php

namespace FeelUnique\Slack\Payload;

/**
 * Payload that triggers the auth.test-method; allowing you to test authentication with the Slack API.
 *
 * @link Official documentation at https://api.slack.com/methods/auth.test
 */
class AuthTestPayload extends AbstractPayload
{
    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'auth.test';
    }
}
