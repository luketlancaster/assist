## Equip Assist

[![Latest Stable Version](https://img.shields.io/packagist/v/equip/assist.svg)](https://packagist.org/packages/equip/assist)
[![License](https://img.shields.io/packagist/l/equip/assist.svg)](https://github.com/equip/assist/blob/master/LICENSE)
[![Build Status](https://travis-ci.org/equip/assist.svg)](https://travis-ci.org/equip/assist)
[![Code Coverage](https://scrutinizer-ci.com/g/equip/assist/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/equip/assist/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/equip/assist/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/equip/assist/?branch=master)

Everyone needs a little assistance! Attempts to be [PSR-1](http://www.php-fig.org/psr/psr-1/)
and [PSR-2](http://www.php-fig.org/psr/psr-2/) compliant.

## Array Functions

All array functions:

- put the array as the first parameter
- work with both arrays and `Traversable` parameters

Import any function with `use function Equip\Arr\func;`.

### List of functions

[`exists($source, $key)`](https://github.com/luketlancaster/assist/blob/master/src/array.php#L15) check if a key exists in an array.

[`to_array($value)`](https://github.com/luketlancaster/assist/blob/master/src/array.php#L31) convert a value to an array.

[`get($source, $key, $default)`](https://github.com/luketlancaster/assist/blob/master/src/array.php#L55) get a value from an array, or the default.

[`some($source, $keys)`](https://github.com/luketlancaster/assist/blob/master/src/array.php#L72) get some values from an array.

[`without($source, $keys)`](https://github.com/luketlancaster/assist/blob/master/src/array.php#L90) get an array without some values.

[`expect($source, $keys, $default)`](https://github.com/luketlancaster/assist/blob/master/src/array.php#L109) get some values from an array, ensuring all keys are defined.

[`head($list)`](https://github.com/luketlancaster/assist/blob/master/src/array.php#L164) get the first value from a list.

[`tail($list)`](https://github.com/luketlancaster/assist/blob/master/src/array.php#L177) get the last value from a list.

[`index_by($source, $key)`](https://github.com/luketlancaster/assist/blob/master/src/array.php#L192) index a collection by a key.

[`column($source, $column)`](https://github.com/luketlancaster/assist/blob/master/src/array.php#L138) get a list of values from a collection.

[`typed($source, $types)`](https://github.com/luketlancaster/assist/blob/master/src/array.php#L240) type cast defined values in an array.
