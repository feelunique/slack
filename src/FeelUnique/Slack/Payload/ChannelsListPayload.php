<?php

namespace FeelUnique\Slack\Payload;

/**
 * @link Official documentation at https://api.slack.com/methods/channels.list
 */
class ChannelsListPayload extends AbstractPayload
{
    /**
     * @var bool
     */
    private $excludeArchived;

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'channels.list';
    }

    /**
     * @param bool $excludeArchived
     */
    public function setExcludeArchived($excludeArchived)
    {
        $this->excludeArchived = $excludeArchived;
    }

    /**
     * @return bool
     */
    public function isExcludeArchived()
    {
        return $this->excludeArchived;
    }
}
