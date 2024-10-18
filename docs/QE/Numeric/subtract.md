# subtract

The `subtract` method, as part of the Numeric namespace, is a static method designed to subtract multiple numeric
parameters. It takes a variable number of parameters, representing the values to be subtracted.

## Example Usage

```php
use digivue\LaravelQueryEnrichMSSQL\QE;
use function digivue\LaravelQueryEnrichMSSQL\c;

$books = Book::select(
    'id',
    'name',
    'price',
    QE::subtract(c('price'), c('discount'))->as('payable_price')
)->get();
```