<?php

namespace FeelUnique\Slack\Payload;

/**
 * Payload that triggers the api.test-method; allowing you to test a connection with the Slack API.
 *
 * @see    Official documentation at https://api.slack.com/methods/api.test
 */
class ApiTestPayload extends AbstractPayload
{
    /**
     * @var array
     */
    private $args = [];

    /**
     * @var string
     */
    private $error;

    /**
     * @param array $args
     */
    public function replaceArguments(array $args)
    {
        $this->args = $args;
    }

    /**
     * @param string $key
     * @param mixed  $value
     */
    public function addArgument($key, $value)
    {
        $this->args[$key] = $value;
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

    /**
     * @return array
     */
    public function getArguments()
    {
        return $this->args;
    }

    /**
     * @param string|null $error Error response to return
     */
    public function setError($error)
    {
        $this->error = $error;
    }

    /**
     * @return string|null Error response to return
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'api.test';
    }
}
