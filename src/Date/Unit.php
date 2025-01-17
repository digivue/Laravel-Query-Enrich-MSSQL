<?php

namespace digivue\LaravelQueryEnrichMSSQL\Date;

enum Unit: string
{
    case MILLISECOND = 'millisecond';
    case SECOND = 'second';
    case MINUTE = 'minute';
    case HOUR = 'hour';
    case DAY = 'day';
    case WEEK = 'week';
    case MONTH = 'month';
    case QUARTER = 'quarter';
    case YEAR = 'year';
}
