<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\Group;


class GroupsCreateChildPayloadResponse extends AbstractPayloadResponse
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
