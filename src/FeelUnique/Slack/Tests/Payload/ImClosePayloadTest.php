<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ImClosePayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class ImClosePayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new ImClosePayload();
        $payload->setImId('I1234567');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param ImClosePayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'channel' => $payload->getImId(),
        ];
    }
}
