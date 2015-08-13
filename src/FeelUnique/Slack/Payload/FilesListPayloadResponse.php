<?php

namespace FeelUnique\Slack\Payload;

use FeelUnique\Slack\Model\File;
use FeelUnique\Slack\Model\Paging;


class FilesListPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var File[]
     */
    private $files = [];

    /**
     * @var Paging
     */
    private $paging;

    /**
     * @return File[]|null
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @return Paging|null
     */
    public function getPaging()
    {
        return $this->paging;
    }

    /**
     * {@inheritdoc}
     */
    protected function getPossibleErrors()
    {
        return array_merge(parent::getPossibleErrors(), [
            'unknown_type' => 'Value passed for types was invalid',
        ]);
    }
}
