<?php

namespace FeelUnique\Slack\Tests\Transport\Events;

use FeelUnique\Slack\Tests\AbstractTestCase;
use FeelUnique\Slack\Transport\Events\ResponseEvent;


class ResponseEventTest extends AbstractTestCase
{
    /**
     * @return array
     */
    public function testGetRawPayloadResponse()
    {
        $expectedPayloadResponse = [];
        $event                   = new ResponseEvent($expectedPayloadResponse);
        $actualPayloadResponse   = $event->getRawPayloadResponse();

        $this->assertEquals($expectedPayloadResponse, $actualPayloadResponse);
    }
}
