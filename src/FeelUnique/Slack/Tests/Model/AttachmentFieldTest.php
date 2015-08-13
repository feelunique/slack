<?php

namespace FeelUnique\Slack\Tests\Model;

use FeelUnique\Slack\Model\AbstractModel;
use FeelUnique\Slack\Model\AttachmentField;


class AttachmentFieldTest extends AbstractModelTest
{
    /**
     * @return array
     */
    protected function getModelData()
    {
        return [
            'title' => 'foo',
            'value' => 'bar',
            'short' => false,
        ];
    }

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return 'FeelUnique\Slack\Model\AttachmentField';
    }

    /**
     * {@inheritdoc}
     *
     * @param AttachmentField $actualModel
     */
    protected function assertModel(array $expectedData, AbstractModel $actualModel)
    {
        $this->assertEquals($expectedData['title'], $actualModel->getTitle());
        $this->assertEquals($expectedData['value'], $actualModel->getValue());
        $this->assertEquals($expectedData['short'], $actualModel->isShort());
    }
}
