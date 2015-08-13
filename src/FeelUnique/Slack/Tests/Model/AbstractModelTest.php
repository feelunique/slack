<?php

namespace FeelUnique\Slack\Tests\Model;

use FeelUnique\Slack\Model\AbstractModel;
use FeelUnique\Slack\Tests\AbstractTestCase;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;


abstract class AbstractModelTest extends AbstractTestCase
{
    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $metaDir          = __DIR__ . '/../../Resources/config/serializer';
        $this->serializer = SerializerBuilder::create()->addMetadataDir($metaDir)->build();
    }

    public function testGetters()
    {
        $modelData  = $this->getModelData();
        $modelClass = $this->getModelClass();

        /** @var AbstractModel $model */
        $model = $this->serializer->deserialize(
            json_encode($modelData),
            $modelClass,
            'json'
        );

        $this->assertInstanceOf($modelClass, $model);
        $this->assertInstanceOf('FeelUnique\Slack\Model\AbstractModel', $model);

        $this->assertModel($modelData, $model);
    }

    /**
     * @return array
     */
    abstract protected function getModelData();

    /**
     * @return string
     */
    abstract protected function getModelClass();

    /**
     * @param array         $expectedModelData
     * @param AbstractModel $actualModel
     */
    abstract protected function assertModel(array $expectedModelData, AbstractModel $actualModel);
}
