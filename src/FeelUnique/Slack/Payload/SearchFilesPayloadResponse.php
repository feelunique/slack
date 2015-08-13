<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\FileResult;


class SearchFilesPayloadResponse extends AbstractSearchPayloadResponse
{
    /**
     * @var FileResult
     */
    private $files;

    /**
     * @return FileResult
     */
    public function getResult()
    {
        return $this->files;
    }
}
