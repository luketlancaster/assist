## Equip Assist

[![Latest Stable Version](https://img.shields.io/packagist/v/equip/assist.svg)](https://packagist.org/packages/equip/assist)
[![License](https://img.shields.io/packagist/l/equip/assist.svg)](https://github.com/equip/assist/blob/master/LICENSE)
[![Build Status](https://travis-ci.org/equip/assist.svg)](https://travis-ci.org/equip/assist)
[![Code Coverage](https://scrutinizer-ci.com/g/equip/assist/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/equip/assist/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/equip/assist/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/equip/assist/?branch=master)

Everyone needs a little assistance! Attempts to be [PSR-1](http://www.php-fig.org/psr/psr-1/)
and [PSR-2](http://www.php-fig.org/psr/psr-2/) compliant.

## Array Functions

### `grab`

Grabs all of the given keys from the source array and returns the result.
If a key does not exist, nothing is added.

```php
$found = \Equip\grab($source, $keys);
```

### `head`

Gets the first value from an list without altering it.

```php
$first = \Equip\head($list);
```
### `tail`

Gets the last value from an list without altering it.

```php
$last = \Equip\tail($list);
```
