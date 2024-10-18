<?php

namespace digivue\LaravelQueryEnrichMSSQL\String;

use Illuminate\Support\Facades\DB;
use digivue\LaravelQueryEnrichMSSQL\DBFunction;
use digivue\LaravelQueryEnrichMSSQL\EDatabaseEngine;
use digivue\LaravelQueryEnrichMSSQL\QE;

/**
 * Calculates the MD5 hash for a given parameter.
 */
class MD5 extends DBFunction
{
    private mixed $parameter;

    public function __construct(mixed $parameter)
    {
        $this->parameter = $parameter;
    }

    protected function getQuery(): string
    {
        switch ($this->getDatabaseEngine()) {
            case EDatabaseEngine::MySQL:
            case EDatabaseEngine::PostgreSQL:
            case EDatabaseEngine::SQLite:
                return $this->getFunctionCallSql('md5', [$this->parameter]);
            case EDatabaseEngine::SQLServer:
                return QE::raw("lower(convert(varchar(32), hashbytes('md5', ?), 2))", [$this->parameter]);
        }
    }

    public function configureForSqlite(): void
    {
        DB::connection()->getPdo()->sqliteCreateFunction('md5', 'md5', 1);
    }
}
