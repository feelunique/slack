<?php

namespace FeelUnique\Slack\Tests\Model;

use FeelUnique\Slack\Model\AbstractModel;
use FeelUnique\Slack\Model\FileResultItem;


class FileResultItemTest extends AbstractModelTest
{
    /**
     * @return array
     */
    protected function getModelData()
    {
        return $this->createFileResultItem();
    }

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return 'FeelUnique\Slack\Model\FileResultItem';
    }

    /**
     * {@inheritdoc}
     *
     * @param FileResultItem $actualModel
     */
    protected function assertModel(array $expectedData, AbstractModel $actualModel)
    {
        $this->assertFileResultItem($expectedData, $actualModel);
    }
}
