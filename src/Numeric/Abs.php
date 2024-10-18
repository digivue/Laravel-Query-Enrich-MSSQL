<?php

namespace digivue\LaravelQueryEnrichMSSQL\Numeric;

use digivue\LaravelQueryEnrichMSSQL\DBFunction;

/**
 * Returns the absolute value of a number.
 */
class Abs extends DBFunction
{
    private mixed $parameter;

    public function __construct(mixed $parameter)
    {
        $this->parameter = $parameter;
    }

    protected function getQuery(): string
    {
        return $this->getFunctionCallSql('abs', [$this->parameter]);
    }
}
