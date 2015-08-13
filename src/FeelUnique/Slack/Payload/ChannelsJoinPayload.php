<?php

namespace FeelUnique\Slack\Payload;

/**
 * @link Official documentation at https://api.slack.com/methods/channels.join
 */
class ChannelsJoinPayload extends AbstractPayload
{
    /**
     * @var string
     */
    private $name;

    /**
     * @param string $channel
     */
    public function setChannel($channel)
    {
        $this->name = $channel;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'channels.join';
    }
}
