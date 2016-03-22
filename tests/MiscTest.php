<?php

namespace Equip\Assist;

use Equip;
use PHPUnit_Framework_TestCase as TestCase;

class MiscTest extends TestCase
{
    public function dataId()
    {
        return [
            [new \stdClass],
            [$this],
            [ ['a'] ],
            [ ['a' => 'foo'] ],
            [ true ],
            [ false ],
            [ null ],
            [ 'test' ],
            [ 42 ],
        ];
    }

    /**
     * @dataProvider dataId
     */
    public function testId($value)
    {
        $this->assertSame($value, Equip\id($value));
    }
}
