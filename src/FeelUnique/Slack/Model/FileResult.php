<?php

namespace FeelUnique\Slack\Model;

/**
 * @link Official documentation at https://api.slack.com/methods/search.files
 */
class FileResult extends AbstractSearchResultModel
{
    /**
     * @var FileResultItem[]
     */
    private $matches = [];

    /**
     * @return FileResultItem[]
     */
    public function getMatches()
    {
        return $this->matches;
    }
}
