<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\File;

/**
 * @link Official documentation at https://api.slack.com/methods/files.upload
 */
class FilesUploadPayloadResponse extends AbstractPayloadResponse
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
