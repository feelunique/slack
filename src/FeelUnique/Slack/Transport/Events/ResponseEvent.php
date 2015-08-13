<?php

namespace FeelUnique\Slack\Transport\Events;

use Symfony\Component\EventDispatcher\Event;


class ResponseEvent extends Event
{
    /**
     * @var array $rawPayloadResponse
     */
    private $rawPayloadResponse;

    /**
     * @param array $rawPayloadResponse
     */
    public function __construct(array $rawPayloadResponse)
    {
        $this->rawPayloadResponse = $rawPayloadResponse;
    }

    /**
     * @return array
     */
    public function getRawPayloadResponse()
    {
        return $this->rawPayloadResponse;
    }
}
