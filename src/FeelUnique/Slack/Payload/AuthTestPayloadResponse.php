<?php

namespace FeelUnique\Slack\Payload;


class AuthTestPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $userId;

    /**
     * @var string
     */
    private $team;

    /**
     * @var string
     */
    private $teamId;

    /**
     * @var string
     */
    private $url;

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @return string
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
