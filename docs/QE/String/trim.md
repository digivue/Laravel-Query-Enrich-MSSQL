# trim

The `trim` method, as part of the String namespace, is a static function designed to remove both leading and trailing
spaces from a given string. It takes a single parameter, `$parameter`, representing the string from which leading and
trailing spaces will be removed.

## Example Usage

```php
use digivue\LaravelQueryEnrichMSSQL\QE;
use function digivue\LaravelQueryEnrichMSSQL\c;

$books = Book::select(
    'id',
    QE::trim(c('title'))->as('title')
)->get();
```