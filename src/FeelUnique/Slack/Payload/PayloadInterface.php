<?php

namespace FeelUnique\Slack\Payload;


interface PayloadInterface
{
    /**
     * @return string
     */
    public function getMethod();

    /**
     * @return string
     */
    public function getResponseClass();
}
