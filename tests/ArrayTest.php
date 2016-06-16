<?php

namespace Equip\Assist;

use ArrayObject;
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

    public function testGet()
    {
        // Works with hash
        $this->assertSame(
            'Acme',
            Equip\get($this->hash, 'company')
        );

        // Or with list
        $this->assertSame(
            ['b'],
            Equip\get($this->list, 1)
        );

        // Value does not exist
        $this->assertSame(
            null,
            Equip\get($this->hash, 'missing')
        );

        // Default value can be provided
        $this->assertSame(
            true,
            Equip\get($this->hash, 'profitable', true)
        );
    }

    public function testSome()
    {
        // Works with a single key
        $this->assertSame(
            ['company' => 'Acme'],
            Equip\some($this->hash, 'company')
        );

        // Or an array of keys
        $this->assertSame(
            ['company' => 'Acme', 'owner' => 'Dr Acme'],
            Equip\some($this->hash, ['company', 'owner'])
        );

        // Missing keys do not cause errors
        $this->assertSame(
            [],
            Equip\some($this->hash, ['never', 'gonna'])
        );
    }

    public function testWithout()
    {
        // Works with a single key
        $this->assertSame(
            [
                'owner' => 'Dr Acme',
                'industry' => 'Financial',
            ],
            Equip\without($this->hash, 'company')
        );

        // Or an array of keys
        $this->assertSame(
            ['industry' => 'Financial'],
            Equip\without($this->hash, ['company', 'owner'])
        );

        // Missing keys do not cause errors
        $this->assertSame(
            [
                'company' => 'Acme',
                'owner' => 'Dr Acme',
                'industry' => 'Financial',
            ],
            Equip\without($this->hash, ['never', 'gonna'])
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

    public function testToArray()
    {
        // Works with arrays
        $this->assertSame([], Equip\to_array([]));
        $this->assertSame(['b'], Equip\to_array(['b']));

        // And with traversables
        $source = new ArrayObject(['foo' => 'bar']);
        $this->assertSame(['foo' => 'bar'], Equip\to_array($source));

        // And with objects
        $source = new \stdClass;
        $source->obj = true;
        $this->assertSame(['obj' => true], Equip\to_array($source));

        // And with scalars
        $this->assertSame([true], Equip\to_array(true));
        $this->assertSame([3], Equip\to_array(3));
        $this->assertSame(['str'], Equip\to_array('str'));
    }
}
