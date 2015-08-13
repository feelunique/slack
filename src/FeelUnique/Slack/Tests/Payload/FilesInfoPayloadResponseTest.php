<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\FilesInfoPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class FilesInfoPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'file' => $this->createFile(),
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                    $responseData
     * @param FilesInfoPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertFile($responseData['file'], $payloadResponse->getFile());
    }
}
