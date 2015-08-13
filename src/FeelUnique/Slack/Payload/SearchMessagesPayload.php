<?php

namespace FeelUnique\Slack\Payload;

/**
 * @link Official documentation at https://api.slack.com/methods/search.messages
 */
class SearchMessagesPayload extends AbstractSearchPayload
{
    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'search.messages';
    }
}
