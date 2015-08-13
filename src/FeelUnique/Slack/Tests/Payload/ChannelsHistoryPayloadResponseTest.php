<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsHistoryPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class ChannelsHistoryPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'messages' => [
                [
                    'ts'       => '12345678',
                    'text'     => 'Hello world!',
                    'type'     => 'message',
                    'user'     => 'U1234567!',
                    'username' => 'acme_user',
                ],
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
