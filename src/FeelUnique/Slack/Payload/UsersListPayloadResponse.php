<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\User;


class UsersListPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var User[]
     */
    private $members;

    /**
     * Returns 1 or more members of the team, in no particular order.
     *
     * For deactivated users, deleted will be true.
     * The color property is used in some clients to display a colored username.
     *
     * @return User[]
     */
    public function getUsers()
    {
        return $this->members;
    }
}
