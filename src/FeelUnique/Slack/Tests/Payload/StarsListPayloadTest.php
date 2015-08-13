<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\StarsListPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


class StarsListPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload()
    {
        $payload = new StarsListPayload();
        $payload->setCount(123);
        $payload->setPage(123);
        $payload->setUserId('U1234567');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param StarsListPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'count' => $payload->getCount(),
            'page'  => $payload->getPage(),
            'user'  => $payload->getUserId(),
        ];
    }
}
