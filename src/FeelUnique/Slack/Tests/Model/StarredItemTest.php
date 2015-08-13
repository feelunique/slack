<?php

namespace FeelUnique\Slack\Tests\Model;

use FeelUnique\Slack\Model\AbstractModel;
use FeelUnique\Slack\Model\StarredItem;


class StarredItemTest extends AbstractModelTest
{
    /**
     * @return array
     */
    protected function getModelData()
    {
        return $this->createStarredItem();
    }

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return 'FeelUnique\Slack\Model\StarredItem';
    }

    /**
     * {@inheritdoc}
     *
     * @param StarredItem $actualModel
     */
    protected function assertModel(array $expectedData, AbstractModel $actualModel)
    {
        $this->assertStarredItem($expectedData, $actualModel);
    }
}
