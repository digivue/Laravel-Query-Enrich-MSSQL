<?php

namespace digivue\LaravelQueryEnrichMSSQL\Date;

use digivue\LaravelQueryEnrichMSSQL\DBFunction;
use digivue\LaravelQueryEnrichMSSQL\EDatabaseEngine;

/**
 * Extracts the date part from a date/datetime expression.
 */
class Date extends DBFunction
{
    private mixed $parameter;

    public function __construct(mixed $parameter)
    {
        $this->parameter = $parameter;
    }

    protected function getQuery(): string
    {
        if ($this->getDatabaseEngine() == EDatabaseEngine::SQLServer) {
            $parameter = $this->escape($this->parameter);

            return "cast($parameter as date)";
        }

        return $this->getFunctionCallSql('date', [$this->parameter]);
    }
}
