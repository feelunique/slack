<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\UsersListPayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class UsersListPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'members' => [
                $this->createUser(),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                    $responseData
     * @param UsersListPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $users = $payloadResponse->getUsers();

        $this->assertCount(1, $users);

        foreach ($users as $x => $user) {
            $this->assertUser($responseData['members'][$x], $user);
        }
    }
}
