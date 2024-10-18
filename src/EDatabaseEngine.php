<?php

namespace digivue\LaravelQueryEnrichMSSQL;

enum EDatabaseEngine
{
    case MySQL;
    case PostgreSQL;
    case SQLite;
    case SQLServer;
}
