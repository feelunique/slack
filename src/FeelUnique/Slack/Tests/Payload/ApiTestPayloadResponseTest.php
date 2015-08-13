<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ApiTestPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class ApiTestPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'error' => 'fake-error',
            'args'  => [
                'foo' => 'bar',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                  $responseData
     * @param ApiTestPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertEquals($payloadResponse->getArguments(), $responseData['args']);
        $this->assertEquals($payloadResponse->getArgument('foo'), $responseData['args']['foo']);
    }
}
