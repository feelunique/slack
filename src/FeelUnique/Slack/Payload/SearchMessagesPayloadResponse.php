<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\MessageResult;


class SearchMessagesPayloadResponse extends AbstractSearchPayloadResponse
{
    /**
     * @var MessageResult
     */
    private $messages;

    /**
     * @return MessageResult
     */
    public function getResult()
    {
        return $this->messages;
    }
}
