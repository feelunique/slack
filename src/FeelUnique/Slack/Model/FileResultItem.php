<?php

namespace FeelUnique\Slack\Model;

/**
 * @link Official documentation at https://api.slack.com/types/file
 */
class FileResultItem extends File
{
    /**
     * @var SimpleChannel
     */
    private $channel;

    /**
     * @return SimpleChannel The channel object on which the message was posted
     */
    public function getChannel()
    {
        return $this->channel;
    }
}
