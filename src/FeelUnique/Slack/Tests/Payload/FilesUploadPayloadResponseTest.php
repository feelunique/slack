<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\FilesUploadPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class FilesUploadPayloadResponseTest extends AbstractPayloadResponseTest
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
     * @param array                      $responseData
     * @param FilesUploadPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertFile($responseData['file'], $payloadResponse->getFile());
    }
}
