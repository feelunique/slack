<?php

namespace FeelUnique\Slack\Payload;


class ChannelsSetPurposePayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var string|null
     */
    private $purpose;

    /**
     * @return string|null
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * {@inheritdoc}
     */
    protected function getPossibleErrors()
    {
        return array_merge(parent::getPossibleErrors(), [
            'too_long' => 'Purpose was longer than 250 characters.',
        ]);
    }
}
