<?php

namespace digivue\LaravelQueryEnrichMSSQL\String;

use digivue\LaravelQueryEnrichMSSQL\DBFunction;

/**
 * Converts a string to upper-case.
 */
class Upper extends DBFunction
{
    private mixed $string;

    public function __construct(mixed $string)
    {
        $this->string = $string;
    }

    protected function getQuery(): string
    {
        return $this->getFunctionCallSql('upper', [$this->string]);
    }
}
