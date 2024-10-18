<?php

namespace digivue\LaravelQueryEnrichMSSQL\Numeric;

use Illuminate\Support\Facades\DB;
use digivue\LaravelQueryEnrichMSSQL\DBFunction;

/**
 * Returns the arc sine of a number.
 */
class Asin extends DBFunction
{
    private $parameter;

    public function __construct($parameter)
    {
        $this->parameter = $parameter;
    }

    protected function getQuery(): string
    {
        return $this->getFunctionCallSql('asin', [$this->parameter]);
    }

    public function configureForSqlite(): void
    {
        DB::connection()->getPdo()->sqliteCreateFunction('asin', 'asin', 1);
    }
}
