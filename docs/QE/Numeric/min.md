# min

The `min` method, as part of the Numeric namespace, is a static method that can be used to determine and return the
minimum value from a set of numeric values. The method takes a parameter, allowing you to provide the column.

## Example Usage

```php
use digivue\LaravelQueryEnrichMSSQL\QE;
use function digivue\LaravelQueryEnrichMSSQL\c;

$books = Book::select(
    QE::min(c('price'))->as('most_inexpensive')
)->groupBy(
    'author_id'
)->get();
```