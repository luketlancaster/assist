<?php

namespace Equip;

use Traversable;

/**
 * Check if a key exists in an array.
 *
 * @param array|Traversable $array
 * @param string|integer $key
 *
 * @return boolean
 */
function exists($array, $key)
{
    return array_key_exists($key, to_array($array));
}

/**
 * Convert a value to an array.
 *
 * If the value is an array it will be returned.
 * If the value is Traversable it will be converted to an array.
 * If the value is anything else it will be cast to an array.
 *
 * @param mixed $value
 *
 * @return array
 */
function to_array($value)
{
    if (is_array($value)) {
        return $value;
    }

    if ($value instanceof Traversable) {
        return iterator_to_array($value);
    }

    return (array) $value;
}

/**
 * Get a single value from an array.
 *
 * If the value does not exist, the default will be returned.
 *
 * @param array|Traversable $source
 * @param string|integer $key
 * @param mixed $default
 *
 * @return mixed
 */
function get($source, $key, $default = null)
{
    if (exists($source, $key)) {
        return $source[$key];
    }

    return $default;
}

/**
 * Grab some values from an array.
 *
 * @param array|Traversable $source
 * @param array|string $keys
 *
 * @return array
 */
function some($source, $keys)
{
    return array_intersect_key(
        to_array($source),
        array_flip(to_array($keys))
    );
}

/**
 * Exclude some values from an array.
 *
 * This is the inverse of some().
 *
 * @param array|Traversable $source
 * @param array|string $keys
 *
 * @return array
 */
function without($source, $keys)
{
    return array_diff_key(
        to_array($source),
        array_flip(to_array($keys))
    );
}

/**
 * Take the first value from an array.
 *
 * @param array $list
 *
 * @return mixed
 */
function head($list)
{
    $list = to_array($list);
    return array_shift($list);
}

/**
 * Take the last value from an array.
 *
 * @param array $list
 *
 * @return mixed
 */
function tail($list)
{
    $list = to_array($list);
    return array_pop($list);
}
