<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\SimpleChannel;


class ChannelsCreatePayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var SimpleChannel
     */
    private $channel;

    /**
     * @return SimpleChannel
     */
    public function getChannel()
    {
        return $this->channel;
    }
}
