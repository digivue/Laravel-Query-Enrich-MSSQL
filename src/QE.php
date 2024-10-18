<?php

namespace digivue\LaravelQueryEnrichMSSQL;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;

/**
 * @method static Column                                c(string $name)                                                                 Retrieves a reference to a specific database column.
 * @method static Raw                                   raw(string $sql, array $bindings = [])                                          Represents a raw SQL expression with bindings.
 * @method static Advanced\CaseExpression\CaseWhenChain case()                                                                          Creates a case expression for handling conditional logic.
 * @method static Advanced\Coalesce                     coalesce(...$parameters)                                                        Returns the first non-null value in a list.
 * @method static Advanced\Exists                       exists(QueryBuilder|EloquentBuilder $query)                                     Checks if a subquery returns any results using the EXISTS condition.
 * @method static Advanced\_If                          if (DBFunction $condition, $valueIfTrue, $valueIfFalse)                         Implements an IF condition to introduce branching.
 * @method static Advanced\IsNull                       isNull($parameter)                                                              Checks if a value is NULL.
 * @method static Condition\Condition                   condition(mixed $parameter1, string $operator = null, mixed $parameter2 = null) Creates a condition.
 * @method static Operator\_And                         and (...$parameters)                                                            Combines multiple conditions with logical AND .
 * @method static Operator\_Or                          or (...$parameters)                                                             Combines multiple conditions with logical OR .
 * @method static Operator\Not                          not($parameter)                                                                 Negates a condition with logical NOT.
 * @method static Date\AddDate                          addDate($subject, $value, Date\Unit $interval = Date\Unit::DAY)                 Adds a specific value to a date/datetime.
 * @method static Date\CurrentDate                      currentDate()                                                                   Retrieves the current date.
 * @method static Date\CurrentTime                      currentTime()                                                                   Retrieves the current time.
 * @method static Date\Date                             date($parameter)                                                                Extracts the date part from a datetime expression.
 * @method static Date\DateDiff                         dateDiff($date1, $date2)                                                        Returns the number of days between two date values.
 * @method static Date\DayOfWeek                        dayOfWeek($parameter)                                                           Returns the weekday index for a given date/datetime.
 * @method static Date\Hour                             hour($parameter)                                                                Returns the hour part for a given time/datetime.
 * @method static Date\Minute                           minute($parameter)                                                              Returns the minute part for a given time/datetime.
 * @method static Date\Month                            month($parameter)                                                               Returns the month part for a given date/datetime.
 * @method static Date\MonthName                        monthName($parameter)                                                           Returns the name of the month for a given date/datetime.
 * @method static Date\Now                              now()                                                                           Returns the current date and time.
 * @method static Date\Second                           second($parameter)                                                              Returns the seconds part of a time/datetime.
 * @method static Date\SubDate                          subDate($subject, $value, Date\Unit $interval = Date\Unit::DAY)                 Subtracts a time/date interval from a date and then returns the date.
 * @method static Date\Time                             time($parameter)                                                                Extracts the time part from a given time/datetime.
 * @method static Date\Year                             year($parameter)                                                                Returns the week number for a given date/datetime.
 * @method static Numeric\Abs                           abs($parameter)                                                                 Returns the absolute value of a number.
 * @method static Numeric\Acos                          acos($parameter)                                                                Returns the arc cosine of a number.
 * @method static Numeric\Add                           add(...$parameters)                                                             Adds multiple numeric parameters.
 * @method static Numeric\Asin                          asin($parameter)                                                                Returns the arc sine of a number.
 * @method static Numeric\Atan                          atan($parameter)                                                                Returns the arc tangent of a number.
 * @method static Numeric\Atan2                         atan2($y, $x)                                                                   Returns the arc tangent of two numbers.
 * @method static Numeric\Avg                           avg($parameter)                                                                 Returns the average value of an expression.
 * @method static Numeric\Ceil                          ceil($parameter)                                                                Returns the smallest integer value that is >= to a number.
 * @method static Numeric\Cos                           cos($parameter)                                                                 Returns the cosine of a number.
 * @method static Numeric\Cot                           cot($parameter)                                                                 Returns the cotangent of a number.
 * @method static Numeric\Count                         count($parameter = '*')                                                         Returns the number of records returned by a select query.
 * @method static Numeric\DegreesToRadian               degreesToRadian($parameter)                                                     Converts a degree value into radians.
 * @method static Numeric\Divide                        divide(...$parameters)                                                          Divide the first numeric parameter by subsequent numeric parameters.
 * @method static Numeric\Exp                           exp($parameter)                                                                 Returns e raised to the power of a specified number.
 * @method static Numeric\Floor                         floor($parameter)                                                               Returns the largest integer value that is <= to a number.
 * @method static Numeric\Greatest                      greatest(...$parameters)                                                        Returns the greatest value of the list of arguments.
 * @method static Numeric\Least                         least(...$parameters)                                                           Returns the smallest value of the list of arguments.
 * @method static Numeric\Ln                            ln($parameter)                                                                  Returns the natural logarithm of a number.
 * @method static Numeric\Log                           log($number, $base = 2)                                                         Returns the logarithm of a number
 * @method static Numeric\Max                           max($parameter)                                                                 Returns the maximum value in a set of values.
 * @method static Numeric\Min                           min($parameter)                                                                 Returns the minimum value in a set of values.
 * @method static Numeric\Mod                           mod($x, $y)                                                                     Returns the remainder of a number divided by another number.
 * @method static Numeric\Multiply                      multiply(...$parameters)                                                        Multiply multiple numeric parameters.
 * @method static Numeric\PI                            pi()                                                                            Returns the value of PI.
 * @method static Numeric\Pow                           pow($x, $y)                                                                     Returns the value of a number raised to the power of another number.
 * @method static Numeric\RadianToDegrees               radianToDegrees($parameter)                                                     Converts a value in radians to degrees.
 * @method static Numeric\Rand                          rand($seed = null)                                                              Returns a random number.
 * @method static Numeric\Round                         round($parameter, $decimals = 0)                                                Rounds a number to a specified number of decimal places.
 * @method static Numeric\Sign                          sign($parameter)                                                                Returns the sign of a number.
 * @method static Numeric\Sin                           sin($parameter)                                                                 Returns the sine of a number.
 * @method static Numeric\Sqrt                          sqrt($parameter)                                                                Returns the square root of a number.
 * @method static Numeric\Subtract                      subtract(...$parameters)                                                        Subtracts multiple numeric parameters.
 * @method static Numeric\Sum                           sum($parameter)                                                                 Calculates the sum of a set of values.
 * @method static Numeric\Tan                           tan($parameter)                                                                 Returns the tangent of a number.
 * @method static String\Concat                         concat(...$parameters)                                                          Adds two or more expressions together.
 * @method static String\ConcatWS                       concatWS($separator, ...$parameters)                                            Adds two or more expressions together with a separator.
 * @method static String\contains                       contains($haystack, $needle)                                                    Determines if a given string contains a given substring.
 * @method static String\EndsWith                       endsWith($haystack, $needle)                                                    Determines if a given string ends with a given substring.
 * @method static String\Left                           left($string, $numberOfChars)                                                   Extracts a number of characters from a string (starting from left).
 * @method static String\Length                         length($parameter)                                                              Returns the length of a string.
 * @method static String\Lower                          lower($parameter)                                                               Converts a string to lower-case
 * @method static String\Ltrim                          ltrim($parameter)                                                               Removes leading spaces from a string.
 * @method static String\MD5                            md5($parameter)                                                                 Calculates the MD5 hash for a given parameter.
 * @method static String\PadLeft                        padLeft($string, $length, $pad = ' ')                                           Left-pads a string with another string, to a certain length.
 * @method static String\PadRight                       padRight($string, $length, $pad = ' ')                                          Right-pads a string with another string, to a certain length.
 * @method static String\Position                       position($subString, $string)                                                   Finds the position of a substring within a string.
 * @method static String\Repeat                         repeat($parameter, $number)                                                     Repeats a string a specified number of times.
 * @method static String\Replace                        replace($string, $substring, $newString)                                        Replaces occurrences of a substring with a new string.
 * @method static String\Reverse                        reverse($parameter)                                                             Reverses the characters of a string.
 * @method static String\Right                          right($string, $numberOfChars)                                                  Extracts a number of characters from a string (starting from right).
 * @method static String\Rtrim                          rtrim($parameter)                                                               Removes trailing spaces from a string.
 * @method static String\Space                          space($parameter)                                                               Returns a string consisting of a specified number of spaces.
 * @method static String\StartsWith                     startsWith($haystack, $needle)                                                  Determines if a given string starts with a given substring.
 * @method static String\Substr                         substr($string, $start, $length = null)                                         Extracts a substring from a string starting at a specified position with optional length.
 * @method static String\Trim                           trim($parameter)                                                                Removes leading and trailing spaces from a string.
 * @method static String\Upper                          upper($parameter)                                                               Converts a string to upper-case.
 */
class QE
{
    const DATABASE_FUNCTIONS = [
        'c'   => 'digivue\LaravelQueryEnrichMSSQL\Column',
        'raw' => 'digivue\LaravelQueryEnrichMSSQL\Raw',

        'case'     => 'digivue\LaravelQueryEnrichMSSQL\Advanced\CaseExpression\CaseWhenChain',
        'if'       => 'digivue\LaravelQueryEnrichMSSQL\Advanced\_If',
        'coalesce' => 'digivue\LaravelQueryEnrichMSSQL\Advanced\Coalesce',
        'isNull'   => 'digivue\LaravelQueryEnrichMSSQL\Advanced\IsNull',
        'exists'   => 'digivue\LaravelQueryEnrichMSSQL\Advanced\Exists',

        'and' => 'digivue\LaravelQueryEnrichMSSQL\Operator\_And',
        'or'  => 'digivue\LaravelQueryEnrichMSSQL\Operator\_Or',
        'not' => 'digivue\LaravelQueryEnrichMSSQL\Operator\Not',

        'condition' => 'digivue\LaravelQueryEnrichMSSQL\Condition\Condition',

        'addDate'     => 'digivue\LaravelQueryEnrichMSSQL\Date\AddDate',
        'currentDate' => 'digivue\LaravelQueryEnrichMSSQL\Date\CurrentDate',
        'currentTime' => 'digivue\LaravelQueryEnrichMSSQL\Date\CurrentTime',
        'date'        => 'digivue\LaravelQueryEnrichMSSQL\Date\Date',
        'dateDiff'    => 'digivue\LaravelQueryEnrichMSSQL\Date\DateDiff',
        'dayOfWeek'   => 'digivue\LaravelQueryEnrichMSSQL\Date\DayOfWeek',
        'hour'        => 'digivue\LaravelQueryEnrichMSSQL\Date\Hour',
        'minute'      => 'digivue\LaravelQueryEnrichMSSQL\Date\Minute',
        'month'       => 'digivue\LaravelQueryEnrichMSSQL\Date\Month',
        'monthName'   => 'digivue\LaravelQueryEnrichMSSQL\Date\MonthName',
        'now'         => 'digivue\LaravelQueryEnrichMSSQL\Date\Now',
        'second'      => 'digivue\LaravelQueryEnrichMSSQL\Date\Second',
        'subDate'     => 'digivue\LaravelQueryEnrichMSSQL\Date\SubDate',
        'time'        => 'digivue\LaravelQueryEnrichMSSQL\Date\Time',
        'year'        => 'digivue\LaravelQueryEnrichMSSQL\Date\Year',

        'abs'             => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Abs',
        'acos'            => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Acos',
        'add'             => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Add',
        'asin'            => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Asin',
        'atan'            => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Atan',
        'atan2'           => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Atan2',
        'avg'             => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Avg',
        'ceil'            => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Ceil',
        'cos'             => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Cos',
        'cot'             => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Cot',
        'count'           => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Count',
        'radianToDegrees' => 'digivue\LaravelQueryEnrichMSSQL\Numeric\RadianToDegrees',
        'divide'          => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Divide',
        'exp'             => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Exp',
        'floor'           => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Floor',
        'greatest'        => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Greatest',
        'least'           => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Least',
        'ln'              => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Ln',
        'log'             => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Log',
        'max'             => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Max',
        'min'             => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Min',
        'mod'             => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Mod',
        'multiply'        => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Multiply',
        'pi'              => 'digivue\LaravelQueryEnrichMSSQL\Numeric\PI',
        'pow'             => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Pow',
        'degreesToRadian' => 'digivue\LaravelQueryEnrichMSSQL\Numeric\DegreesToRadian',
        'rand'            => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Rand',
        'round'           => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Round',
        'sign'            => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Sign',
        'sin'             => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Sin',
        'sqrt'            => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Sqrt',
        'subtract'        => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Subtract',
        'sum'             => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Sum',
        'tan'             => 'digivue\LaravelQueryEnrichMSSQL\Numeric\Tan',

        'concat'     => 'digivue\LaravelQueryEnrichMSSQL\String\Concat',
        'concatWS'   => 'digivue\LaravelQueryEnrichMSSQL\String\ConcatWS',
        'contains'   => 'digivue\LaravelQueryEnrichMSSQL\String\Contains',
        'endsWith'   => 'digivue\LaravelQueryEnrichMSSQL\String\EndsWith',
        'left'       => 'digivue\LaravelQueryEnrichMSSQL\String\Left',
        'length'     => 'digivue\LaravelQueryEnrichMSSQL\String\Length',
        'lower'      => 'digivue\LaravelQueryEnrichMSSQL\String\Lower',
        'ltrim'      => 'digivue\LaravelQueryEnrichMSSQL\String\Ltrim',
        'md5'        => 'digivue\LaravelQueryEnrichMSSQL\String\MD5',
        'padLeft'    => 'digivue\LaravelQueryEnrichMSSQL\String\PadLeft',
        'padRight'   => 'digivue\LaravelQueryEnrichMSSQL\String\PadRight',
        'position'   => 'digivue\LaravelQueryEnrichMSSQL\String\Position',
        'repeat'     => 'digivue\LaravelQueryEnrichMSSQL\String\Repeat',
        'replace'    => 'digivue\LaravelQueryEnrichMSSQL\String\Replace',
        'reverse'    => 'digivue\LaravelQueryEnrichMSSQL\String\Reverse',
        'right'      => 'digivue\LaravelQueryEnrichMSSQL\String\Right',
        'rtrim'      => 'digivue\LaravelQueryEnrichMSSQL\String\Rtrim',
        'space'      => 'digivue\LaravelQueryEnrichMSSQL\String\Space',
        'startsWith' => 'digivue\LaravelQueryEnrichMSSQL\String\StartsWith',
        'substr'     => 'digivue\LaravelQueryEnrichMSSQL\String\Substr',
        'trim'       => 'digivue\LaravelQueryEnrichMSSQL\String\Trim',
        'upper'      => 'digivue\LaravelQueryEnrichMSSQL\String\Upper',
    ];

    public static function __callStatic(string $name, array $arguments)
    {
        $class = self::DATABASE_FUNCTIONS[$name];

        return new $class(...$arguments);
    }
}
