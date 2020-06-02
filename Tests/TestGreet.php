<?php
require('./functions.php');

use PHPUnit\Framework\TestCase;

class TestGreet extends TestCase
{
    public function testSuccess_1()
    {
        $actual = greet('Bob');
        $this->assertEquals('Hello, Bob.', $actual);
    }
}
