<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\FilesListPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class FilesListPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new FilesListPayload();
        $payload->setPage(1);
        $payload->setCount(10);
        $payload->setTypes(['all']);
        $payload->setUserId('U1234567');
        $payload->setTimestampFrom(new \DateTime('-1 day'));
        $payload->setTimestampTo(new \DateTime());

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param FilesListPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'page'    => $payload->getPage(),
            'count'   => $payload->getCount(),
            'types'   => $payload->getTypes(),
            'user'    => $payload->getUserId(),
            'ts_from' => $payload->getTimestampFrom()->format('U'),
            'ts_to'   => $payload->getTimestampTo()->format('U'),
        ];
    }
}
