<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\EmojiListPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class EmojiListPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'emoji' => [
                'foobar'       => 'http://foo.bar/emoji.png',
                'foobar_alias' => 'alias:original_foobar',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                    $responseData
     * @param EmojiListPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertEquals($responseData['emoji'], $payloadResponse->getEmojis());
    }
}
