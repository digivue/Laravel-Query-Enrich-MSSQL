<?php

namespace digivue\LaravelQueryEnrichMSSQL\Numeric;

use digivue\LaravelQueryEnrichMSSQL\DBFunction;

/**
 * Subtracts multiple numeric parameters.
 */
class Subtract extends DBFunction
{
    private array $parameters;

    public function __construct(...$parameters)
    {
        $this->parameters = $parameters;
    }

    protected function getQuery(): string
    {
        return $this->getOperatorSeparatedSql('-', $this->parameters);
    }
}
