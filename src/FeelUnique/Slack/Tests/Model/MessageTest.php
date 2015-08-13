<?php

namespace FeelUnique\Slack\Tests\Model;

use FeelUnique\Slack\Model\AbstractModel;
use FeelUnique\Slack\Model\Message;


class MessageTest extends AbstractModelTest
{
    /**
     * @return array
     */
    protected function getModelData()
    {
        return $this->createMessage();
    }

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return 'FeelUnique\Slack\Model\Message';
    }

    /**
     * {@inheritdoc}
     *
     * @param Message $actual
     */
    protected function assertModel(array $expected, AbstractModel $actual)
    {
        $this->assertMessage($expected, $actual);
    }
}
