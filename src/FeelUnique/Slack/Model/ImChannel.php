<?php

namespace FeelUnique\Slack\Model;

/**
 * @link Official documentation at https://api.slack.com/types/im
 */
class ImChannel extends AbstractModel
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var bool
     */
    private $isIm;

    /**
     * @var bool
     */
    private $isUserDeleted;

    /**
     * @var string
     */
    private $user;

    /**
     * @return string The ID of this channel.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \DateTime The date/time on which this channel was created.
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return boolean
     */
    public function isIm()
    {
        return $this->isIm;
    }

    /**
     * @return boolean
     */
    public function isUserDeleted()
    {
        return $this->isUserDeleted;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->user;
    }
}
