<?php

namespace digivue\LaravelQueryEnrichMSSQL\String;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use digivue\LaravelQueryEnrichMSSQL\DBFunction;
use digivue\LaravelQueryEnrichMSSQL\EDatabaseEngine;

/**
 * Right-pads a string with another string, to a certain length.
 */
class PadRight extends DBFunction
{
    private mixed $string;
    private mixed $length;
    private mixed $pad;

    public function __construct(mixed $string, mixed $length, mixed $pad = ' ')
    {
        $this->string = $string;
        $this->length = $length;
        $this->pad = $pad;
    }

    protected function getQuery(): string
    {
        switch ($this->getDatabaseEngine()) {
            case EDatabaseEngine::MySQL:
            case EDatabaseEngine::PostgreSQL:
            case EDatabaseEngine::SQLite:
                return $this->getFunctionCallSql('rpad', [$this->string, $this->length, $this->pad]);
            case EDatabaseEngine::SQLServer:
                $string = $this->escape($this->string);
                $length = $this->escape($this->length);
                $pad = $this->escape($this->pad);

                return "$string + left(replicate($pad, $length), $length - len($string))";
        }
    }

    public function configureForSqlite(): void
    {
        DB::connection()->getPdo()->sqliteCreateFunction('rpad', function ($string, $length, $pad) {
            return Str::padRight($string, $length, $pad);
        }, 3);
    }
}
