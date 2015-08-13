<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\Channel;


class ChannelsInfoPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var Channel|null
     */
    private $channel;

    /**
     * @return Channel|null
     */
    public function getChannel()
    {
        return $this->channel;
    }
}
