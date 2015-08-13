<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\Group;


class GroupsListPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var Group[]
     */
    private $groups;

    /**
     * @return Group[]
     */
    public function getGroups()
    {
        return $this->groups;
    }
}
