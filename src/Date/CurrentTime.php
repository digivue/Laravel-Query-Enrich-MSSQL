<?php

namespace digivue\LaravelQueryEnrichMSSQL\Date;

use digivue\LaravelQueryEnrichMSSQL\DBFunction;
use digivue\LaravelQueryEnrichMSSQL\EDatabaseEngine;
use digivue\LaravelQueryEnrichMSSQL\QE;

/**
 * Retrieves the current time.
 */
class CurrentTime extends DBFunction
{
    protected function getQuery(): string
    {
        switch ($this->getDatabaseEngine()) {
            case EDatabaseEngine::MySQL:
                return $this->getFunctionCallSql('current_time');
            case EDatabaseEngine::PostgreSQL:
                return 'localtime::time(0)';
            case EDatabaseEngine::SQLite:
                return $this->getFunctionCallSql('time');
            case EDatabaseEngine::SQLServer:
                return QE::time(
                    QE::raw($this->getFunctionCallSql('getdate'))
                )->getQuery();
        }
    }
}
