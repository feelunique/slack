<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\GroupWithState;


class GroupsCreatePayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var GroupWithState|null
     */
    private $group;

    /**
     * @return GroupWithState|null
     */
    public function getGroup()
    {
        return $this->group;
    }
}
