<?php

namespace Equip\Assist;

use Equip;
use PHPUnit_Framework_TestCase as TestCase;

class ArrayTest extends TestCase
{
    private $hash = [
        'company' => 'Acme',
        'owner' => 'Dr Acme',
        'industry' => 'Financial',
    ];

    private $list = [
        ['a'],
        ['b'],
        ['c'],
    ];

    public function testGrab()
    {
        // Works with a single key
        $this->assertSame(
            ['company' => 'Acme'],
            Equip\grab($this->hash, 'company')
        );

        // Or an array of keys
        $this->assertSame(
            ['company' => 'Acme', 'owner' => 'Dr Acme'],
            Equip\grab($this->hash, ['company', 'owner'])
        );

        // Missing keys do not cause errors
        $this->assertSame(
            [],
            Equip\grab($this->hash, ['never', 'gonna'])
        );
    }

    public function testHead()
    {
        // Works with no value
        $this->assertNull(Equip\head([]));

        // Pulls the first key in hash
        $this->assertSame('Acme', Equip\head($this->hash));

        // Array is unchanged
        $this->assertSame('Acme', $this->hash['company']);

        // Works with collections
        $this->assertSame(['a'], Equip\head($this->list));
    }

    public function testTail()
    {
        // Works with no value
        $this->assertNull(Equip\tail([]));

        // Pulls the last key in hash
        $this->assertSame('Financial', Equip\tail($this->hash));

        // Array is unchanged
        $this->assertSame('Financial', $this->hash['industry']);

        // Works with collections
        $this->assertSame(['c'], Equip\tail($this->list));
    }
}
