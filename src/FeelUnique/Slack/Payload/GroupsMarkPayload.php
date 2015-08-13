<?php

namespace FeelUnique\Slack\Payload;

/**
 * @link Official documentation at https://api.slack.com/methods/groups.mark
 */
class GroupsMarkPayload extends AbstractPayload
{
    /**
     * Slack seems to want to call this option "channel", but I can't agree with that (the format of the value is different),
     * and will just pretend to my users it's a "group" (ID)
     *
     * @var string
     */
    private $channel;

    /**
     * @var string
     */
    private $ts;

    /**
     * @param string $groupId ID of the group to set reading cursor in.
     */
    public function setGroupId($groupId)
    {
        $this->channel = $groupId;
    }

    /**
     * @return string ID of the group to set reading cursor in.
     */
    public function getGroupId()
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
        return 'groups.mark';
    }
}
