# now

The `now` function is a method that retrieves the current timestamp. This function does not require any parameters
and simply returns the current date when called.

## Example Usage

```php
use digivue\LaravelQueryEnrichMSSQL\QE;
use function digivue\LaravelQueryEnrichMSSQL\c;

Book::where('id', 1)->update(['published_at'=>QE::now()]);
```