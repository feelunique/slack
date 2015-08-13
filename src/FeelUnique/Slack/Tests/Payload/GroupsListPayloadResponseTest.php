<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\GroupsListPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class GroupsListPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'groups' => [
                $this->createGroup(),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                     $responseData
     * @param GroupsListPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $channels = $payloadResponse->getGroups();

        $this->assertCount(1, $channels);

        foreach ($channels as $x => $channel) {
            $this->assertGroup($responseData['groups'][$x], $channel);
        }
    }
}
