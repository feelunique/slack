<?php

namespace FeelUnique\Slack\Model;

/**
 * @link Official documentation at https://api.slack.com/docs/formatting
 */
class Message extends SimpleMessage
{
    /**
     * @var Channel|null
     */
    private $channel;

    /**
     * @var string|null
     */
    private $permalink;

    /**
     * @var SimpleMessage|null
     */
    private $previous;

    /**
     * @var SimpleMessage|null
     */
    private $previous2;

    /**
     * @var SimpleMessage|null
     */
    private $next;

    /**
     * @var SimpleMessage|null
     */
    private $next2;

    /**
     * @var SimpleMessage|null
     */
    private $next2Alt;

    /**
     * @return Channel|null
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @return SimpleMessage|null
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @return SimpleMessage|null
     */
    public function getNext2()
    {
        return $this->next2;
    }

    /**
     * @return SimpleMessage|null
     */
    public function getNext2Alt()
    {
        return $this->next2Alt;
    }

    /**
     * @return null|string
     */
    public function getPermalink()
    {
        return $this->permalink;
    }

    /**
     * @return SimpleMessage|null
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * @return SimpleMessage|null
     */
    public function getPrevious2()
    {
        return $this->previous2;
    }
}
