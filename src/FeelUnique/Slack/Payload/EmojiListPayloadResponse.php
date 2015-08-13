<?php

namespace FeelUnique\Slack\Payload;


class EmojiListPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var array
     */
    private $emoji = [];

    /**
     * @return array
     */
    public function getEmojis()
    {
        return $this->emoji;
    }
}
