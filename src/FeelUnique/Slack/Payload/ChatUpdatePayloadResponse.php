<?php

namespace FeelUnique\Slack\Payload;


class ChatUpdatePayloadResponse extends AbstractPayloadResponse
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
     * @var string|null
     */
    private $text;

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
     * @return string|null
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * {@inheritdoc}
     */
    protected function getPossibleErrors()
    {
        return array_merge(parent::getPossibleErrors(), [
            'cant_update_message' => 'Authenticated user does not have permission to update this message',
            'edit_window_closed'  => 'The message cannot be edited due to the team message edit settings',
            'msg_too_long'        => 'Message text is too long',
            'no_text'             => 'No message text provided',
        ]);
    }
}
