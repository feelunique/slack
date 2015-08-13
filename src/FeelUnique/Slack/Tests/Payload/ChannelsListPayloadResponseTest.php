<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChannelsListPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class ChannelsListPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'channels' => [
                $this->createChannel(),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                       $responseData
     * @param ChannelsListPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $channels = $payloadResponse->getChannels();

        $this->assertCount(1, $channels);

        foreach ($channels as $x => $channel) {
            $this->assertChannel($responseData['channels'][$x], $channel);
        }
    }
}
