<?php

namespace FeelUnique\Slack\Payload;


class ChannelsLeavePayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var bool
     */
    private $notInChannel;

    /**
     * @return boolean
     */
    public function isNotInChannel()
    {
        return $this->notInChannel;
    }
}
