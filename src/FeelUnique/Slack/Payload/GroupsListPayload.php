<?php

namespace FeelUnique\Slack\Payload;

/**
 * @link Official documentation at https://api.slack.com/methods/groups.list
 */
class GroupsListPayload extends AbstractPayload
{
    /**
     * @var bool
     */
    private $excludeArchived;

    /**
     * @param bool $excludeArchived
     */
    public function setExcludeArchived($excludeArchived)
    {
        $this->excludeArchived = $excludeArchived;
    }

    /**
     * @return bool
     */
    public function isExcludeArchived()
    {
        return $this->excludeArchived;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'groups.list';
    }
}
