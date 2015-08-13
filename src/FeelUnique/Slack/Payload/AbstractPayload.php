<?php

namespace FeelUnique\Slack\Payload;


abstract class AbstractPayload implements PayloadInterface
{
    /**
     * {@inheritdoc}
     */
    public function getResponseClass()
    {
        return sprintf('%sResponse', get_class($this));
    }
}
