# year

The `year` function you provided is similar in purpose to [Carbon](https://carbon.nesbot.com/){:target="_blank"}'s year
method. Both are used to retrieve the year part for a given time or datetime.

## Example Usage

```php
use digivue\LaravelQueryEnrichMSSQL\QE;
use function digivue\LaravelQueryEnrichMSSQL\c;

$book = Book::select(
    'id',
    'name',
    QE::year(c('published_at'))->as('published_year')
)->first();
```