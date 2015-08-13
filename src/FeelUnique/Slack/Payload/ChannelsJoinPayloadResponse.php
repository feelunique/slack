<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\Channel;


class ChannelsJoinPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var bool
     */
    private $alreadyInChannel;

    /**
     * @var Channel|null
     */
    private $channel;

    /**
     * @return boolean
     */
    public function isAlreadyInChannel()
    {
        return $this->alreadyInChannel;
    }

    /**
     * @return Channel|null
     */
    public function getChannel()
    {
        return $this->channel;
    }
}
