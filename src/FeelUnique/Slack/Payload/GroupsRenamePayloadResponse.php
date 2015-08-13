<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\Group;


class GroupsRenamePayloadResponse extends AbstractPayloadResponse
{
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
}
