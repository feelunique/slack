<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ApiTestPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class ApiTestPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new ApiTestPayload();
        $payload->setError('fake-error');
        $payload->addArgument('foo', 'bar');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param ApiTestPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'error' => $payload->getError(),
            'foo'   => $payload->getArgument('foo'),
        ];
    }
}
