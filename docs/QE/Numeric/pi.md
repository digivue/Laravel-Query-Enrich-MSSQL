# pi

The `pi` method, as part of the Numeric namespace, is a static method that can be used to retrieve and return the
mathematical constant π (pi).

## Example Usage

```php
use digivue\LaravelQueryEnrichMSSQL\QE;
use function digivue\LaravelQueryEnrichMSSQL\c;

$circles = Circle::select(
    'id',
    'radius',
    QE::multiply(2, QE::pi(), c('radius'))->as('perimeter'),
    QE::multiply(QE::pi(), c('radius'), c('radius'))->as('area'),
)->get();
```