<?php

namespace FeelUnique\Slack\Payload;


class ApiTestPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var array
     */
    protected $args = [];

    /**
     * @return array
     */
    public function getArguments()
    {
        return $this->args;
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function getArgument($key)
    {
        if (!array_key_exists($key, $this->args)) {
            throw new \InvalidArgumentException(sprintf('There is no argument with that name: "%s"', $key));
        }

        return $this->args[$key];
    }
}
