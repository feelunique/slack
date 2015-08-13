<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\PayloadResponseInterface;
use FeelUnique\Slack\Payload\SearchFilesPayloadResponse;


class SearchFilesPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'files' => $this->createFileResult(),
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                      $responseData
     * @param SearchFilesPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $fileResult = $payloadResponse->getResult();

        $this->assertInstanceOf('FeelUnique\Slack\Model\FileResult', $fileResult);
        $this->assertCount(1, $fileResult->getMatches());

        foreach ($fileResult->getMatches() as $x => $match) {
            $this->assertFileResultItem($responseData['files']['matches'][$x], $match);
        }
    }
}
