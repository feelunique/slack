<?php

namespace FeelUnique\Slack\Serializer;

use FeelUnique\Slack\Payload\PayloadResponseInterface;


class PayloadResponseSerializer extends AbstractSerializer
{
    /**
     * @param array  $payloadResponse
     * @param string $payloadResponseClass
     *
     * @return PayloadResponseInterface
     */
    public function deserialize(array $payloadResponse, $payloadResponseClass)
    {
        $payloadResponseObject = $this->serializer->deserialize(
            json_encode($payloadResponse),
            $payloadResponseClass,
            'json'
        );

        if (!($payloadResponseObject instanceof PayloadResponseInterface)) {
            throw new \RuntimeException(sprintf(
                'The serializer expected the response data to be converted into an instance of "%s", got: %s',
                $payloadResponseClass,
                is_object($payloadResponseObject) ? 'instance of ' . get_class($payloadResponseObject) : gettype($payloadResponseObject)
            ));
        }

        return $payloadResponseObject;
    }
}
