<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\PayloadResponseInterface;
use FeelUnique\Slack\Payload\SearchMessagesPayloadResponse;


class SearchMessagesPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'messages' => $this->createMessageResult(),
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                         $responseData
     * @param SearchMessagesPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $fileResult = $payloadResponse->getResult();

        $this->assertInstanceOf('FeelUnique\Slack\Model\MessageResult', $fileResult);
        $this->assertCount(1, $fileResult->getMatches());

        foreach ($fileResult->getMatches() as $x => $match) {
            $this->assertMessageResultItem($responseData['messages']['matches'][$x], $match);
        }
    }
}
