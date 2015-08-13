<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\Channel;


class ChannelsListPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var Channel[]
     */
    private $channels;

    /**
     * @return Channel[]
     */
    public function getChannels()
    {
        return $this->channels;
    }
}
