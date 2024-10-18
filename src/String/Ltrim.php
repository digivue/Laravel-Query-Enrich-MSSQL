<?php

namespace digivue\LaravelQueryEnrichMSSQL\String;

use digivue\LaravelQueryEnrichMSSQL\DBFunction;

/**
 * Removes leading spaces from a string.
 */
class Ltrim extends DBFunction
{
    private mixed $parameter;

    public function __construct(mixed $parameter)
    {
        $this->parameter = $parameter;
    }

    protected function getQuery(): string
    {
        return $this->getFunctionCallSql('ltrim', [$this->parameter]);
    }
}
