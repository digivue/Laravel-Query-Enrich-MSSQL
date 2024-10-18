<?php

namespace digivue\LaravelQueryEnrichMSSQL\String;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use digivue\LaravelQueryEnrichMSSQL\DBFunction;
use digivue\LaravelQueryEnrichMSSQL\EDatabaseEngine;

/**
 * Repeats a string a specified number of times.
 */
class Repeat extends DBFunction
{
    private mixed $parameter;
    private mixed $number;

    public function __construct(mixed $parameter, mixed $number)
    {
        $this->parameter = $parameter;
        $this->number = $number;
    }

    protected function getQuery(): string
    {
        switch ($this->getDatabaseEngine()) {
            case EDatabaseEngine::MySQL:
            case EDatabaseEngine::PostgreSQL:
            case EDatabaseEngine::SQLite:
                return $this->getFunctionCallSql('repeat', [$this->parameter, $this->number]);
            case EDatabaseEngine::SQLServer:
                return $this->getFunctionCallSql('replicate', [$this->parameter, $this->number]);
        }
    }

    public function configureForSqlite(): void
    {
        DB::connection()->getPdo()->sqliteCreateFunction('repeat', function ($parameter, $number) {
            return Str::repeat($parameter, $number);
        }, 2);
    }
}
