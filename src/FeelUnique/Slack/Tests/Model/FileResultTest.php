<?php

namespace FeelUnique\Slack\Tests\Model;

use FeelUnique\Slack\Model\AbstractModel;
use FeelUnique\Slack\Model\FileResult;


class FileResultTest extends AbstractModelTest
{
    /**
     * @return array
     */
    protected function getModelData()
    {
        return [
            'matches' => [
                $this->createFileResultItem(),
            ],
        ];
    }

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return 'FeelUnique\Slack\Model\FileResult';
    }

    /**
     * {@inheritdoc}
     *
     * @param FileResult $actualModel
     */
    protected function assertModel(array $expectedData, AbstractModel $actualModel)
    {
        foreach ($actualModel->getMatches() as $i => $fileResultItem) {
            $this->assertFileResultItem($expectedData['matches'][$i], $fileResultItem);
        }
    }
}
