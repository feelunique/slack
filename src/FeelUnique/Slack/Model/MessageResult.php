<?php

namespace FeelUnique\Slack\Model;

/**
 * @link Official documentation at https://api.slack.com/methods/search.messages
 */
class MessageResult extends AbstractSearchResultModel
{
    /**
     * @var MessageResultItem[]
     */
    private $matches = [];

    /**
     * @return MessageResultItem[]
     */
    public function getMatches()
    {
        return $this->matches;
    }
}
