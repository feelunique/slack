<?php

namespace FeelUnique\Slack\Payload;


class ChatDeletePayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var string|null
     */
    private $channel;

    /**
     * @var string
     */
    private $ts;

    /**
     * @return string|null
     */
    public function getChannelId()
    {
        return $this->channel;
    }

    /**
     * @return string
     */
    public function getSlackTimestamp()
    {
        return $this->ts;
    }

    /**
     * {@inheritdoc}
     */
    protected function getPossibleErrors()
    {
        return array_merge(parent::getPossibleErrors(), [
            'message_not_found'   => 'No message exists with the requested timestamp',
            'cant_delete_message' => 'Authenticated user does not have permission to delete this message',
        ]);
    }
}
