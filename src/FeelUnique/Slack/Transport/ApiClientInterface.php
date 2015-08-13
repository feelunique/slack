<?php

namespace FeelUnique\Slack\Transport;

use FeelUnique\Slack\Payload\PayloadInterface;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


interface ApiClientInterface
{
    /**
     * @param PayloadInterface $payload The payload to send
     * @param string|null      $token   Optional token to use during the API-call,
     *                                  defaults to the one configured during construction
     *
     * @return PayloadResponseInterface Actual class depends on the payload used,
     *                                  e.g. chat.postMessage will return an instance of ChatPostMessagePayloadResponse
     */
    public function send(PayloadInterface $payload, $token = null);
}
