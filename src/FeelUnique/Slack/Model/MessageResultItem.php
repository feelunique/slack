<?php

namespace FeelUnique\Slack\Model;

/**
 * @link Official documentation at https://api.slack.com/docs/formatting
 */
class MessageResultItem extends Message
{
    /**
     * @var SimpleChannel|null
     */
    private $channel;

    /**
     * @return SimpleChannel|null The channel object on which the message was posted
     */
    public function getChannel()
    {
        return $this->channel;
    }
}
