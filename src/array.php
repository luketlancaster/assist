<?php

namespace Equip;

/**
 * Grab some values from an array.
 *
 * @param array $source
 * @param array|string $keys
 *
 * @return array
 */
function grab(array $source, $keys)
{
    return array_intersect_key(
        $source,
        array_flip((array) $keys)
    );
}

/**
 * Take the first value from an array.
 *
 * @param array $list
 *
 * @return mixed
 */
function head(array $list)
{
    return array_shift($list);
}

/**
 * Take the last value from an array.
 *
 * @param array $list
 *
 * @return mixed
 */
function tail(array $list)
{
    return array_pop($list);
}
