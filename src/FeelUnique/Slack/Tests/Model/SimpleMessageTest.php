<?php

namespace FeelUnique\Slack\Tests\Model;

use FeelUnique\Slack\Model\AbstractModel;
use FeelUnique\Slack\Model\SimpleMessage;


class SimpleMessageTest extends AbstractModelTest
{
    /**
     * @return array
     */
    protected function getModelData()
    {
        return $this->createSimpleMessage();
    }

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return 'FeelUnique\Slack\Model\SimpleMessage';
    }

    /**
     * {@inheritdoc}
     *
     * @param SimpleMessage $actual
     */
    protected function assertModel(array $expected, AbstractModel $actual)
    {
        $this->assertSimpleMessage($expected, $actual);
    }
}
