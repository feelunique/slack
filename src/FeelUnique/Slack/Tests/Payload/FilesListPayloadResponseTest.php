<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\FilesListPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class FilesListPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'files' => [
                $this->createFile(),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                    $responseData
     * @param FilesListPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $files = $payloadResponse->getFiles();

        $this->assertCount(1, $files);

        foreach ($files as $x => $file) {
            $this->assertFile($responseData['files'][$x], $file);
        }
    }
}
