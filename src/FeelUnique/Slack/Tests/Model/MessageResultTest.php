<?php

/*
 * This message is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * message that was distributed with this source code.
 */

namespace FeelUnique\Slack\Tests\Model;

use FeelUnique\Slack\Model\AbstractModel;
use FeelUnique\Slack\Model\MessageResult;


class MessageResultTest extends AbstractModelTest
{
    /**
     * @return array
     */
    protected function getModelData()
    {
        return [
            'matches' => [
                $this->createMessageResultItem(),
            ],
        ];
    }

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return 'FeelUnique\Slack\Model\MessageResult';
    }

    /**
     * {@inheritdoc}
     *
     * @param MessageResult $actualModel
     */
    protected function assertModel(array $expectedData, AbstractModel $actualModel)
    {
        foreach ($actualModel->getMatches() as $i => $messageResultItem) {
            $this->assertMessageResultItem($expectedData['matches'][$i], $messageResultItem);
        }
    }
}
