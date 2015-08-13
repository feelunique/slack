<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\User;


class UsersInfoPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var User|null
     */
    private $user;

    /**
     * @return User|null
     */
    public function getUser()
    {
        return $this->user;
    }
}
