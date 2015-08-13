<?php

namespace FeelUnique\Slack\Payload;

/**
 * @see    Official documentation at https://api.slack.com/methods/im.close
 */
class ImClosePayload extends AbstractPayload
{
    /**
     * Slack seems to want to call this option "channel", but I can't agree with that (the format of the value is different),
     * and will just pretend to my users it's an IM ID
     *
     * @var string
     */
    private $channel;

    /**
     * @param string $imId
     */
    public function setImId($imId)
    {
        $this->channel = $imId;
    }

    /**
     * @return string ID of the im channel to close
     */
    public function getImId()
    {
        return $this->channel;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'im.close';
    }
}
