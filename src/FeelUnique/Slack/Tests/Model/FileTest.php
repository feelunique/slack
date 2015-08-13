<?php

namespace FeelUnique\Slack\Tests\Model;

use FeelUnique\Slack\Model\AbstractModel;
use FeelUnique\Slack\Model\File;


class FileTest extends AbstractModelTest
{
    /**
     * @return array
     */
    protected function getModelData()
    {
        return $this->createFile();
    }

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return 'FeelUnique\Slack\Model\File';
    }

    /**
     * {@inheritdoc}
     *
     * @param File $actualModel
     */
    protected function assertModel(array $expectedData, AbstractModel $actualModel)
    {
        $this->assertFile($expectedData, $actualModel);
    }
}
