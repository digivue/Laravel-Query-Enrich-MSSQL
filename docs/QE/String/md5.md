# md5

The `md5` method, belonging to the Advanced namespace, is a static function to calculate the MD5 hash for a given
parameter.

## Example Usage

```php
use digivue\LaravelQueryEnrichMSSQL\QE;
use function digivue\LaravelQueryEnrichMSSQL\c;

$books = Book::select(
    'id',
    'name',
    'price',
    QE::md5(QE::concatWS(',', c('name', 'price')))->as('checksum')
)->get();
```
