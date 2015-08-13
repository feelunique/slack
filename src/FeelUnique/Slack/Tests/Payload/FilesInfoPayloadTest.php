<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\FilesInfoPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class FilesInfoPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new FilesInfoPayload();
        $payload->setFileId('F1234567');
        $payload->setPage(1);
        $payload->setCount(10);

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param FilesInfoPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'file'  => $payload->getFileId(),
            'page'  => $payload->getPage(),
            'count' => $payload->getCount(),
        ];
    }
}
