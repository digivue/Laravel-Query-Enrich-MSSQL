<?php

namespace digivue\LaravelQueryEnrichMSSQL\Numeric;

use Illuminate\Support\Facades\DB;
use digivue\LaravelQueryEnrichMSSQL\DBFunction;

/**
 * Returns the cotangent of a number.
 */
class Cot extends DBFunction
{
    private mixed $parameter;

    public function __construct(mixed $parameter)
    {
        $this->parameter = $parameter;
    }

    protected function getQuery(): string
    {
        return $this->getFunctionCallSql('cot', [$this->parameter]);
    }

    public function configureForSqlite(): void
    {
        DB::connection()->getPdo()->sqliteCreateFunction('cot', function ($parameter) {
            return 1 / tan($parameter);
        }, 1);
    }
}
