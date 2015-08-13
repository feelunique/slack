<?php

namespace FeelUnique\Slack\Payload;

/**
 * @link Official documentation at https://api.slack.com/methods/chat.delete
 */
class ChatDeletePayload extends AbstractPayload
{
    /**
     * @var string
     */
    private $channel;

    /**
     * @var string
     */
    private $ts;

    /**
     * @param string $channelId
     */
    public function setChannelId($channelId)
    {
        $this->channel = $channelId;
    }

    /**
     * @return string
     */
    public function getChannelId()
    {
        return $this->channel;
    }

    /**
     * @param string $timestamp
     */
    public function setSlackTimestamp($timestamp)
    {
        $this->ts = $timestamp;
    }

    /**
     * @return string
     */
    public function getSlackTimestamp()
    {
        return $this->ts;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'chat.delete';
    }
}
