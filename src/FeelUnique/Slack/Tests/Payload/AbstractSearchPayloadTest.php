<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\AbstractSearchPayload;
use FeelUnique\Slack\Payload\PayloadInterface;


abstract class AbstractSearchPayloadTest extends AbstractPayloadTest
{
    /**
     * {@inheritdoc}
     */
    protected function createPayload(AbstractSearchPayload $payload = null)
    {
        $payload->setQuery('foo');
        $payload->setPage(123);
        $payload->setCount(123);
        $payload->setHighlight(true);
        $payload->setSort('bar');
        $payload->setSortDir('asc');

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param AbstractSearchPayload $payload
     */
    protected function getExpectedPayloadData(PayloadInterface $payload)
    {
        return [
            'query'     => $payload->getQuery(),
            'page'      => $payload->getPage(),
            'count'     => $payload->getCount(),
            'highlight' => $payload->getHighlight(),
            'sort'      => $payload->getSort(),
            'sort_dir'  => $payload->getSortDir(),
        ];
    }
}
