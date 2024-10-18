<?php

namespace digivue\LaravelQueryEnrichMSSQL\String;

use digivue\LaravelQueryEnrichMSSQL\DBFunction;

/**
 * Removes leading and trailing spaces from a string.
 */
class Trim extends DBFunction
{
    private mixed $parameter;

    public function __construct(mixed $parameter)
    {
        $this->parameter = $parameter;
    }

    protected function getQuery(): string
    {
        return $this->getFunctionCallSql('trim', [$this->parameter]);
    }
}
