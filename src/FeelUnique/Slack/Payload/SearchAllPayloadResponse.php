<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\FileResult;
use FeelUnique\Slack\Model\MessageResult;


class SearchAllPayloadResponse extends AbstractSearchPayloadResponse
{
    /**
     * @var MessageResult
     */
    private $messages;

    /**
     * @var FileResult
     */
    private $files;

    /**
     * @return MessageResult
     */
    public function getMessageResult()
    {
        return $this->messages;
    }

    /**
     * @return FileResult
     */
    public function getFileResult()
    {
        return $this->files;
    }
}
