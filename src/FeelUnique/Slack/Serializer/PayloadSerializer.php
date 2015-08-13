<?php

namespace FeelUnique\Slack\Serializer;

use FeelUnique\Slack\Payload\PayloadInterface;


class PayloadSerializer extends AbstractSerializer
{
    /**
     * @param PayloadInterface $payload
     *
     * @return array The serialized payload data
     */
    public function serialize(PayloadInterface $payload)
    {
        $serializedPayload = $this->serializer->serialize($payload, 'json');
        if (!$serializedPayload || !is_string($serializedPayload)) {
            throw new \RuntimeException(sprintf(
                'Failed to serialize payload; expected it to be a string, got: %s',
                var_export($serializedPayload, true)
            ));
        }

        return json_decode($serializedPayload, true);
    }
}
