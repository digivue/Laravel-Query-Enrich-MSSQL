# or

The `or` function is employed to combine multiple conditions using the logical OR operator. It accepts a variable
number of parameters, which represent individual conditions. The function then combines these conditions using the
logical OR operator, signifying that at least one of the specified conditions must be true for the combined condition to
be true.

## Example Usage

```php
use digivue\LaravelQueryEnrichMSSQL\QE;
use function digivue\LaravelQueryEnrichMSSQL\c;

$authors = Author::select(
    'id',
    'name',
    QE::or(c('is_famous'), c('is_rich'))->as('is_fine'),
)->get();
```