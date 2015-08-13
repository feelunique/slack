<?php

namespace FeelUnique\Slack\Payload;

/**
 * @link Official documentation at https://api.slack.com/methods/im.open
 */
class ImOpenPayload extends AbstractPayload
{
    /**
     * @var string
     */
    private $user;

    /**
     * @param string $userId ID of the user to open a direct message channel with
     */
    public function setUserId($userId)
    {
        $this->user = $userId;
    }

    /**
     * @return string ID of the user to open a direct message channel with
     */
    public function getUserId()
    {
        return $this->user;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'im.open';
    }
}
