<?php

namespace FeelUnique\Slack\Payload;

/**
 * @link Official documentation at https://api.slack.com/methods/search.files
 */
class SearchFilesPayload extends AbstractSearchPayload
{
    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'search.files';
    }
}
