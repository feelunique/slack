<?php

namespace FeelUnique\Slack\Payload;

/**
 * @link Official documentation at https://api.slack.com/methods/presence.set
 */
class UsersSetPresencePayload extends AbstractPayload
{
    /**
     * @var string
     */
    private $presence;

    /**
     * @param string $presence
     */
    public function setPresence($presence)
    {
        $this->presence = $presence;
    }

    /**
     * @return string
     */
    public function getPresence()
    {
        return $this->presence;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'user.setPresence';
    }
}
