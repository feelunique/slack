<?php

namespace FeelUnique\Slack\Payload;


class GroupsUnarchivePayloadResponse extends AbstractPayloadResponse
{
    /**
     * {@inheritdoc}
     */
    protected function getPossibleErrors()
    {
        return array_merge(parent::getPossibleErrors(), [
            'not_archived' => 'Group is not archived',
        ]);
    }
}
