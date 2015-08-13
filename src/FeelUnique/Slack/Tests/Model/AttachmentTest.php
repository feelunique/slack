<?php

namespace FeelUnique\Slack\Tests\Model;

use FeelUnique\Slack\Model\AbstractModel;
use FeelUnique\Slack\Model\Attachment;


class AttachmentTest extends AbstractModelTest
{
    /**
     * @return array
     */
    protected function getModelData()
    {
        return [
            'color'    => '#123456',
            'fallback' => 'fallback text',
            'text'     => 'normal text',
            'pre_text' => 'pre text',
            'fields'   => [
                [
                    'title' => 'foo',
                    'value' => 'bar',
                    'short' => false,
                ],
            ],
        ];
    }

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return 'FeelUnique\Slack\Model\Attachment';
    }

    /**
     * {@inheritdoc}
     *
     * @param Attachment $actualModel
     */
    protected function assertModel(array $expectedData, AbstractModel $actualModel)
    {
        $this->assertEquals($expectedData['color'], $actualModel->getColor());
        $this->assertEquals($expectedData['fallback'], $actualModel->getFallback());
        $this->assertEquals($expectedData['pre_text'], $actualModel->getPreText());
        $this->assertEquals($expectedData['text'], $actualModel->getText());
        $this->assertEquals($expectedData['fields'][0]['title'], $actualModel->getFields()[0]->getTitle());
        $this->assertEquals($expectedData['fields'][0]['value'], $actualModel->getFields()[0]->getValue());
        $this->assertEquals($expectedData['fields'][0]['short'], $actualModel->getFields()[0]->isShort());
    }
}
