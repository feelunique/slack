<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\PayloadResponseInterface;
use FeelUnique\Slack\Payload\SearchAllPayloadResponse;


class SearchAllPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'files'    => $this->createFileResult(),
            'messages' => $this->createMessageResult(),
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                    $responseData
     * @param SearchAllPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $fileResult    = $payloadResponse->getFileResult();
        $messageResult = $payloadResponse->getMessageResult();

        $this->assertInstanceOf('FeelUnique\Slack\Model\FileResult', $fileResult);
        $this->assertInstanceOf('FeelUnique\Slack\Model\MessageResult', $messageResult);
        $this->assertCount(1, $fileResult->getMatches());
        $this->assertCount(1, $messageResult->getMatches());

        foreach ($fileResult->getMatches() as $x => $file) {
            $this->assertFileResultItem($responseData['files']['matches'][$x], $file);
        }

        foreach ($messageResult->getMatches() as $x => $message) {
            $this->assertMessageResultItem($responseData['messages']['matches'][$x], $message);
        }
    }
}
