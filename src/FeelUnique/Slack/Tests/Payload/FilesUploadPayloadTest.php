<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\FilesUploadPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class FilesUploadPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new FilesUploadPayload();
        $payload->setContent('fake content');
        $payload->setFilename('acme_file.txt');
        $payload->setFileType('text/plain');
        $payload->setTitle('Acme File');
        $payload->setChannels(['C1234567']);

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param FilesUploadPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'title'     => $payload->getTitle(),
            'content'   => $payload->getContent(),
            'filename'  => $payload->getFilename(),
            'file_type' => $payload->getFileType(),
            'channels'  => $payload->getChannelsAsString(),
        ];
    }
}
