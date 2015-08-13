<?php

namespace FeelUnique\Slack\Model;

/**
 * @link Official documentation at https://api.slack.com/methods/search.all
 */
class Paging extends AbstractModel
{
    /**
     * @var int
     */
    private $count;

    /**
     * @var int
     */
    private $total;

    /**
     * @var int
     */
    private $page;

    /**
     * @var int
     */
    private $pages;

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getPages()
    {
        return $this->pages;
    }
}
