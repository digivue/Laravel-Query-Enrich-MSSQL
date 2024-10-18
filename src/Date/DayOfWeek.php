<?php

namespace digivue\LaravelQueryEnrichMSSQL\Date;

use digivue\LaravelQueryEnrichMSSQL\DBFunction;
use digivue\LaravelQueryEnrichMSSQL\EDatabaseEngine;
use digivue\LaravelQueryEnrichMSSQL\QE;

/**
 * Returns the weekday index for a given date/datetime.
 */
class DayOfWeek extends DBFunction
{
    private mixed $parameter;

    public function __construct($parameter)
    {
        $this->parameter = $parameter;
    }

    protected function getQuery(): string
    {
        switch ($this->getDatabaseEngine()) {
            case EDatabaseEngine::MySQL:
                return $this->getFunctionCallSql('dayofweek', [$this->parameter]).'-1';
            case EDatabaseEngine::PostgreSQL:
                $parameter = $this->escape($this->parameter);

                return "extract(dow from $parameter)";
            case EDatabaseEngine::SQLite:
                return $this->getFunctionCallSql('strftime', [QE::raw("'%w'"), $this->parameter]);
            case EDatabaseEngine::SQLServer:
                return $this->getFunctionCallSql('datepart', [QE::raw('weekday'), $this->parameter]).'-1';
        }
    }
}
