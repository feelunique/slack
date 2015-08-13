<?php

namespace FeelUnique\Slack\Tests\Model;

use FeelUnique\Slack\Model\AbstractModel;
use FeelUnique\Slack\Model\SimpleChannel;


class SimpleChannelTest extends AbstractModelTest
{
    /**
     * @return array
     */
    protected function getModelData()
    {
        return [
            'id'          => 'C1234567',
            'name'        => 'channel_name',
            'created'     => '12345678',
            'creator'     => 'U1234567',
            'is_archived' => false,
            'is_general'  => false,
        ];
    }

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return 'FeelUnique\Slack\Model\SimpleChannel';
    }

    /**
     * {@inheritdoc}
     *
     * @param SimpleChannel $actualModel
     */
    protected function assertModel(array $expectedData, AbstractModel $actualModel)
    {
        $this->assertEquals($expectedData['id'], $actualModel->getId());
        $this->assertEquals($expectedData['name'], $actualModel->getName());
        $this->assertEquals($expectedData['created'], $actualModel->getCreated()->format('U'));
        $this->assertEquals($expectedData['creator'], $actualModel->getCreator());
        $this->assertEquals($expectedData['is_archived'], $actualModel->isArchived());
        $this->assertEquals($expectedData['is_general'], $actualModel->isGeneral());
    }
}
