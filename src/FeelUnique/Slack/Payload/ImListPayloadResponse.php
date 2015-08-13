<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\ImChannel;


class ImListPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var ImChannel[]
     */
    private $channels;

    /**
     * @return ImChannel[]
     */
    public function getImChannels()
    {
        return $this->channels;
    }
}
