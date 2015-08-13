<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ImListPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class ImListPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'channels' => [
                $this->createImChannel(),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                 $responseData
     * @param ImListPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $channels = $payloadResponse->getImChannels();

        $this->assertCount(1, $channels);

        foreach ($channels as $x => $channel) {
            $this->assertImChannel($responseData['channels'][$x], $channel);
        }
    }
}
