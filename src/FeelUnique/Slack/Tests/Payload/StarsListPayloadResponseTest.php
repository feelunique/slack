<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\PayloadResponseInterface;
use FeelUnique\Slack\Payload\StarsListPayloadResponse;


class StarsListPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'items' => [
                $this->createStarredItem(),
            ],
            'paging' => $this->createPaging(),
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                    $responseData
     * @param StarsListPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        foreach ($payloadResponse->getItems() as $i => $item) {
            $this->assertStarredItem($responseData['items'][$i], $item);
        }

        $this->assertPaging($responseData['paging'], $payloadResponse->getPaging());
    }
}
