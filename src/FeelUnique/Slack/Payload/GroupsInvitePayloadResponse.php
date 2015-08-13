<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\Group;


class GroupsInvitePayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var bool|null
     */
    private $alreadyInGroup;

    /**
     * @var Group|null
     */
    private $group;

    /**
     * @return Group|null
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @return bool|null
     */
    public function getAlreadyInGroup()
    {
        return $this->alreadyInGroup;
    }
}
