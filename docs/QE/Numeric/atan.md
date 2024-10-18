# atan

The `atan` function is used to return the arc tangent of a number. It takes a single parameter, `$parameter`, which
represents the number for which you want to find the arc tangent.

## Example Usage

```php
use digivue\LaravelQueryEnrichMSSQL\QE;

$queryResult = DB::selectOne(
    'select ' . QE::atan($number)->as('atan'),
);
```