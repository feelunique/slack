<?php

namespace FeelUnique\Slack\Payload;


interface PayloadResponseInterface
{
    /**
     * @return bool True if the request was handled successfully, false otherwise
     */
    public function isOk();

    /**
     * @return string|null Any error message returned by Slack (always null if response was 'ok')
     */
    public function getError();

    /**
     * @return string|null Any error message returned by Slack, converted into a more human-readable sentence
     *                     (always null if response was 'ok')
     */
    public function getErrorExplanation();
}
