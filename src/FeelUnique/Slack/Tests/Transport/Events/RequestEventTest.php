<?php

namespace FeelUnique\Slack\Tests\Transport\Events;

use FeelUnique\Slack\Tests\AbstractTestCase;
use FeelUnique\Slack\Transport\Events\RequestEvent;


class RequestEventTest extends AbstractTestCase
{
    /**
     * @return array
     */
    public function testGetRawPayload()
    {
        $expectedPayload = [];
        $event           = new RequestEvent($expectedPayload);
        $actualPayload   = $event->getRawPayload();

        $this->assertEquals($expectedPayload, $actualPayload);
    }
}
