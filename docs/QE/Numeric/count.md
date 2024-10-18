# count

The `count` function is used to retrieve the number of records on a specific column or expression on from a select
query.

## Example Usage

```php
use digivue\LaravelQueryEnrichMSSQL\QE;
use function digivue\LaravelQueryEnrichMSSQL\c;

$authors = DB::table('authors')->select(
    'authors.id',
    'authors.first_name',
    'authors.last_name',
    QE::count(c('books.id'))->as('books_count')
)->join('books', 'books.author_id', 'authors.id')->groupBy('authors.id')->get();
```