<?php

namespace FeelUnique\Slack\Test\Payload;

use FeelUnique\Slack\Payload\AbstractPayload;


class MockPayload extends AbstractPayload
{
    /**
     * @var string
     */
    private $foo;

    /**
     * @param string $foo
     */
    public function setFoo($foo)
    {
        $this->foo = $foo;
    }

    public function getMethod()
    {
        return 'mock';
    }

    public function getResponseClass()
    {
        return 'FeelUnique\Slack\Test\Payload\MockPayloadResponse';
    }
}
