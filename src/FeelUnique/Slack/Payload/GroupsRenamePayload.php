<?php

namespace FeelUnique\Slack\Payload;

/**
 * @see    Official documentation at https://api.slack.com/methods/groups.rename
 */
class GroupsRenamePayload extends AbstractPayload
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
    private $name;

    /**
     * @param string $groupId ID of the group to rename
     */
    public function setGroupId($groupId)
    {
        $this->channel = $groupId;
    }

    /**
     * @return string ID of the group to rename
     */
    public function getGroupId()
    {
        return $this->channel;
    }

    /**
     * @param string $name New name for group
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string New name for group
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
        return 'groups.rename';
    }
}
