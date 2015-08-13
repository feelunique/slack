<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\File;


class FilesInfoPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var File|null
     */
    private $file;

    /**
     * @return File|null
     */
    public function getFile()
    {
        return $this->file;
    }
}
