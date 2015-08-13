<?php

namespace FeelUnique\Slack\Model;

/**
 * @link Official documentation at https://api.slack.com/types/group
 */
class GroupWithState extends Group
{
    /**
     * @var bool
     */
    private $isOpen;

    /**
     * @return boolean
     */
    public function isOpen()
    {
        return $this->isOpen;
    }
}
