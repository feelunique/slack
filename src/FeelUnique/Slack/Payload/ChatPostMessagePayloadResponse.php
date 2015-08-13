<?php

namespace FeelUnique\Slack\Payload;


class ChatPostMessagePayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var string|null
     */
    private $ts;

    /**
     * @var string|null
     */
    private $channel;

    /**
     * @return string|null The Slack timestamp on which your message has been posted, or null if the call failed
     */
    public function getSlackTimestamp()
    {
        return $this->ts;
    }

    /**
     * @return string|null The Slack channel ID on which your message has been posted, or null if the call failed
     */
    public function getChannelId()
    {
        return $this->channel;
    }
}
