<?php

namespace FeelUnique\Slack\Payload;


abstract class AbstractSearchPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var string|null
     */
    private $query;

    /**
     * @return string|null The query that was used to search
     */
    public function getQuery()
    {
        return $this->query;
    }
}
