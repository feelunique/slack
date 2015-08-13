<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\Paging;
use FeelUnique\Slack\Model\StarredItem;


class StarsListPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var StarredItem[]
     */
    private $items = [];

    /**
     * @var Paging
     */
    private $paging;

    /**
     * @return StarredItem[]|null
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return Paging|null
     */
    public function getPaging()
    {
        return $this->paging;
    }
}
