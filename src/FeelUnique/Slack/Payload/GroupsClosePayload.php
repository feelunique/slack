<?php

namespace FeelUnique\Slack\Payload;

/**
 * @see    Official documentation at https://api.slack.com/methods/groups.close
 */
class GroupsClosePayload extends AbstractPayload
{
    /**
     * Slack seems to want to call this option "channel", but I can't agree with that (the format of the value is different),
     * and will just pretend to my users it's a "group" (ID)
     *
     * @var string
     */
    private $channel;

    /**
     * @param string $groupId
     */
    public function setGroupId($groupId)
    {
        $this->channel = $groupId;
    }

    /**
     * @return string ID of a private group to archive
     */
    public function getGroupId()
    {
        return $this->channel;
    }

    /**
     * @return string ID of a private group to archive
     */
    public function getMethod()
    {
        return 'groups.close';
    }
}
