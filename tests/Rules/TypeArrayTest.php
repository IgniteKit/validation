<?php

namespace IgniteKit\Validation\Tests\Rules;

use IgniteKit\Validation\Rules\TypeArray;
use PHPUnit\Framework\TestCase;

class TypeArrayTest extends TestCase
{

    public function setUp() : void
    {
        $this->rule = new TypeArray;
    }

    public function testValids()
    {
        $this->assertTrue($this->rule->check([]));
        $this->assertTrue($this->rule->check([1,2,3]));
        $this->assertTrue($this->rule->check([1,2,[4,5,6]]));
    }

    public function testInvalids()
    {
        $this->assertFalse($this->rule->check('[]'));
        $this->assertFalse($this->rule->check('[1,2,3]'));
    }
}
