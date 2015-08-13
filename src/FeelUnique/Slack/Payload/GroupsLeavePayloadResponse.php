<?php

namespace FeelUnique\Slack\Payload;


class GroupsLeavePayloadResponse extends AbstractPayloadResponse
{
    protected function getPossibleErrors()
    {
        return array_merge(parent::getPossibleErrors(), [
            'account_inactive'        => 'Authentication token is for a deleted user or team',
            'cant_leave_last_channel' => 'Authenticated user cannot leave the last channel they are in',
            'channel_not_found'       => 'Value passed for channel was invalid',
            'invalid_auth'            => 'Invalid authentication token',
            'is_archived'             => 'Group has been archived',
            'last_member'             => 'Authenticated user is the last member of a group and cannot leave it',
            'not_authed'              => 'No authentication token provided',
        ]);
    }
}
