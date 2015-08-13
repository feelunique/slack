<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\GroupsCreateChildPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class GroupsCreateChildPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'group' => $this->createGroup(),
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                            $responseData
     * @param GroupsCreateChildPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertGroup($responseData['group'], $payloadResponse->getGroup());
    }
}
