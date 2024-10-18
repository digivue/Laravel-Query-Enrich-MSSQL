# ceil

The `ceil` function is used to round a given number up to the smallest integer that is greater than or equal to the
original number. It takes a single parameter, `$parameter`, which represents the number to be rounded up.

## Example Usage

```php
use digivue\LaravelQueryEnrichMSSQL\QE;
use function digivue\LaravelQueryEnrichMSSQL\c;

$books = Book::select(
    QE::ceil(c('price'))->as('price_ceil')
)->get();
```