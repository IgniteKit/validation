<?php

namespace IgniteKit\Validation\Tests\Rules;

use IgniteKit\Validation\Rules\Date;
use PHPUnit\Framework\TestCase;

class DateTest extends TestCase
{

    public function setUp() : void
    {
        $this->rule = new Date;
    }

    public function testValids()
    {
        $this->assertTrue($this->rule->check("2010-10-10"));
        $this->assertTrue($this->rule->fillParameters(['d-m-Y'])->check("10-10-2010"));
    }

    public function testInvalids()
    {
        $this->assertFalse($this->rule->check("10-10-2010"));
        $this->assertFalse($this->rule->fillParameters(['Y-m-d'])->check("2010-10-10 10:10"));
    }
}
