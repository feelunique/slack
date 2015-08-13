<?php

namespace FeelUnique\Slack\Serializer;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;


abstract class AbstractSerializer
{
    /**
     * @var SerializerInterface
     */
    protected $serializer;

    final public function __construct()
    {
        $metaDir          = __DIR__ . '/../Resources/config/serializer';
        $this->serializer = SerializerBuilder::create()->addMetadataDir($metaDir)->build();
    }
}
