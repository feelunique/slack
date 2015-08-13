<?php

namespace FeelUnique\Slack\Payload;


class GroupsClosePayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var bool
     */
    private $noOp;

    /**
     * @var bool
     */
    private $alreadyClosed;

    /**
     * @return boolean
     */
    public function isAlreadyClosed()
    {
        return $this->alreadyClosed;
    }

    /**
     * @return boolean
     */
    public function isNoOp()
    {
        return $this->noOp;
    }

    /**
     * {@inheritdoc}
     */
    protected function getPossibleErrors()
    {
        return array_merge(parent::getPossibleErrors(), [
            'channel_not_found'     => 'Value passed for group was invalid',
            'already_archived'      => 'Group has already been archived',
            'group_contains_others' => 'Restricted accounts cannot archive groups containing others',
            'last_ra_channel'       => 'You cannot archive the last channel for a restricted account',
            'restricted_action'     => 'A team preference prevents authenticated user from archiving',
        ]);
    }
}
