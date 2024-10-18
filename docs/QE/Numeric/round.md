# round

The `round` method, as part of the Numeric namespace, is a static method that can be used to round a number to a
specified number of decimal places. It takes two parameters: `$parameter`, representing the number to be rounded,
and `$decimals`, representing the number of decimal places (defaulting to 0 if not specified).

## Example Usage

```php
use digivue\LaravelQueryEnrichMSSQL\QE;
use function digivue\LaravelQueryEnrichMSSQL\c;

$books = Book::select(
    'id',
    'name',
    QE::round(c('price'))->as('rounded_price')
)->get();
```