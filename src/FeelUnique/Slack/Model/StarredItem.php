<?php

namespace FeelUnique\Slack\Model;


class StarredItem extends AbstractModel
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var File
     */
    private $file;

    /**
     * @var string
     */
    private $comment;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return File
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}
