<?php

namespace FeelUnique\Slack\Transport\Events;

use Symfony\Component\EventDispatcher\Event;


class RequestEvent extends Event
{
    /**
     * @var array
     */
    private $rawPayload;

    /**
     * @param array $rawPayload
     */
    public function __construct(array $rawPayload)
    {
        $this->rawPayload = $rawPayload;
    }

    /**
     * @return array
     */
    public function getRawPayload()
    {
        return $this->rawPayload;
    }
}
