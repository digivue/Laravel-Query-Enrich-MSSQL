<?php

namespace digivue\LaravelQueryEnrichMSSQL\Numeric;

use digivue\LaravelQueryEnrichMSSQL\DBFunction;

/**
 * Returns the maximum value in a set of values.
 */
class Max extends DBFunction
{
    private mixed $parameter;

    public function __construct(mixed $parameter)
    {
        $this->parameter = $parameter;
    }

    protected function getQuery(): string
    {
        return $this->getFunctionCallSql('max', [$this->parameter]);
    }
}
