<?php

namespace digivue\LaravelQueryEnrichMSSQL\Advanced;

use digivue\LaravelQueryEnrichMSSQL\DBFunction;

/**
 * Returns the first non-null value in a list.
 */
class Coalesce extends DBFunction
{
    private array $parameters;

    public function __construct(...$parameters)
    {
        $this->parameters = $parameters;
    }

    protected function getQuery(): string
    {
        return $this->getFunctionCallSql('coalesce', $this->parameters);
    }
}
