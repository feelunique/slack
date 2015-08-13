<?php

namespace FeelUnique\Slack\Payload;


class ChannelsUnarchivePayloadResponse extends AbstractPayloadResponse
{
    /**
     * {@inheritdoc}
     */
    protected function getPossibleErrors()
    {
        return array_merge(parent::getPossibleErrors(), [
            'not_archived' => 'Channel is not archived',
        ]);
    }
}
