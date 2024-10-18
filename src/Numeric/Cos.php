<?php

namespace digivue\LaravelQueryEnrichMSSQL\Numeric;

use Illuminate\Support\Facades\DB;
use digivue\LaravelQueryEnrichMSSQL\DBFunction;

/**
 * Returns the cosine of a number.
 */
class Cos extends DBFunction
{
    private mixed $parameter;

    public function __construct(mixed $parameter)
    {
        $this->parameter = $parameter;
    }

    protected function getQuery(): string
    {
        return $this->getFunctionCallSql('cos', [$this->parameter]);
    }

    public function configureForSqlite(): void
    {
        DB::connection()->getPdo()->sqliteCreateFunction('cos', 'cos', 1);
    }
}
