<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsHistoryPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class ImHistoryPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'messages' => [
                $this->createSimpleMessage(),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                          $responseData
     * @param ChannelsHistoryPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $messages = $payloadResponse->getMessages();

        $this->assertCount(1, $messages);

        foreach ($messages as $x => $message) {
            $this->assertSimpleMessage($responseData['messages'][$x], $message);
        }
    }
}
