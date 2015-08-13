<?php

namespace FeelUnique\Slack\Payload;

/**
 * @see    Official documentation at https://api.slack.com/methods/channels.rename
 */
class ChannelsRenamePayload extends AbstractPayload
{
    /**
     * @var string
     */
    private $channel;

    /**
     * @var string
     */
    private $name;

    /**
     * @param string $channel ID of the channel to rename
     */
    public function setChannelId($channel)
    {
        $this->channel = $channel;
    }

    /**
     * @return string ID of the channel to rename
     */
    public function getChannelId()
    {
        return $this->channel;
    }

    /**
     * @param string $name New name for channel.
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string New name for channel.
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'channels.rename';
    }
}
