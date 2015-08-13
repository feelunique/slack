<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\GroupsHistoryPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class GroupsHistoryPayloadResponseTest extends AbstractPayloadResponseTest
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
     * @param array                        $responseData
     * @param GroupsHistoryPayloadResponse $payloadResponse
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
