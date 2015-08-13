<?php

namespace FeelUnique\Slack\Payload;

/**
 * @link Official documentation at https://api.slack.com/methods/groups.create
 */
class GroupsCreatePayload extends AbstractPayload
{
    /**
     * @var string Name of group to create
     */
    private $name;

    /**
     * @param string $name Name of group to create
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string Name of group to create
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'groups.create';
    }
}
