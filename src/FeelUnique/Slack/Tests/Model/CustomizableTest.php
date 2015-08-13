<?php

namespace FeelUnique\Slack\Tests\Model;

use FeelUnique\Slack\Model\AbstractModel;
use FeelUnique\Slack\Model\Customizable;


class CustomizableTest extends AbstractModelTest
{
    /**
     * @return array
     */
    protected function getModelData()
    {
        return [
            'value'    => 'this is the customizable value',
            'creator'  => 'U1234567',
            'last_set' => 1369677212,
        ];
    }

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return 'FeelUnique\Slack\Model\Customizable';
    }

    /**
     * {@inheritdoc}
     *
     * @param Customizable $actualModel
     */
    protected function assertModel(array $expectedData, AbstractModel $actualModel)
    {
        $this->assertEquals($expectedData['value'], $actualModel->getValue());
        $this->assertEquals($expectedData['last_set'], $actualModel->getLastSet()->format('U'));
        $this->assertEquals($expectedData['creator'], $actualModel->getCreator());
    }
}
