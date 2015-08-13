<?php

namespace FeelUnique\Slack\Payload;


class GroupsSetTopicPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var string|null
     */
    private $topic;

    /**
     * @return string|null
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * {@inheritdoc}
     */
    protected function getPossibleErrors()
    {
        return array_merge(parent::getPossibleErrors(), [
            'too_long' => 'Topic was longer than 250 characters.',
        ]);
    }
}
