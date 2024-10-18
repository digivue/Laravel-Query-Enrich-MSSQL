# abs

The `abs` function is used to return the absolute value of a number. It takes a single parameter, `$parameter`, which
represents the number for which you want to find the absolute value.

## Example Usage

```php
use digivue\LaravelQueryEnrichMSSQL\QE;
use function digivue\LaravelQueryEnrichMSSQL\c;

$vectors = Vector::select(
    'x',
    'y',
    QE::abs(c('x'))->as('abs_x'),
    QE::abs(c('y'))->as('abs_y'),
)->get();
```