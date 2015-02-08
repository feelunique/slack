<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class Group extends AbstractModel
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $id;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * @var \DateTime
     *
     * @Serializer\Type("DateTime<'U'>")
     */
    protected $created;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $creator;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isArchived;

    /**
     * @var array<string>
     *
     * @Serializer\Type("array<string>")
     */
    protected $members = [];

    /**
     * @var Customizable
     *
     * @Serializer\Type("CL\Slack\Model\Customizable")
     */
    protected $topic;

    /**
     * @var Customizable
     *
     * @Serializer\Type("CL\Slack\Model\Customizable")
     */
    protected $purpose;

    /**
     * @return string The ID of this group.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string The name of the group, without a leading hash sign.
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return \DateTime The date/time on which this group was created.
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return string The user ID of the member that created this group.
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @return bool True if this group has been archived, false otherwise.
     */
    public function isArchived()
    {
        return $this->isArchived;
    }

    /**
     * @return array A list of user ids for all users in this group.
     *               This includes any disabled accounts that were in this group when they were disabled.
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @return Customizable Information about the group's topic.
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * @return Customizable Information about the group's purpose.
     */
    public function getPurpose()
    {
        return $this->purpose;
    }
}
