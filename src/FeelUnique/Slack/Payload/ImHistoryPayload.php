<?php

namespace FeelUnique\Slack\Payload;

/**
 * Payload that triggers the channels.history-method; allowing you to fetch historical information about a given channel
 *
 * @link Official documentation at https://api.slack.com/methods/im.history
 */
class ImHistoryPayload extends AbstractPayload
{
    /**
     * @var string
     */
    private $channel;

    /**
     * @var string
     */
    private $oldest;

    /**
     * @var string
     */
    private $latest;

    /**
     * @var integer
     */
    private $count;

    /**
     * @param string $imId
     */
    public function setImId($imId)
    {
        $this->channel = $imId;
    }

    /**
     * @return string
     */
    public function getImId()
    {
        return $this->channel;
    }

    /**
     * @param string|string|null $latest
     */
    public function setLatest($latest = null)
    {
        $this->latest = $latest;
    }

    /**
     * @return string|string|null
     */
    public function getLatest()
    {
        return $this->latest;
    }

    /**
     * @param string|null $oldest
     */
    public function setOldest($oldest = null)
    {
        $this->oldest = $oldest;
    }

    /**
     * @return string|null
     */
    public function getOldest()
    {
        return $this->oldest;
    }

    /**
     * @param int|null $count
     */
    public function setCount($count = null)
    {
        $this->count = $count;
    }

    /**
     * @return int|null
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'im.history';
    }
}
