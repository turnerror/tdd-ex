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
    public function testSuccess_null()
    {
        $actual = greet(null);
        $this->assertEquals('Hello, my friend.', $actual);
    }

    public function testSuccess_uppercase()
    {
        $actual = greet('DUDE');
        $this->assertEquals('HELLO DUDE!', $actual);
    }

    public function testSuccess_2names()
    {
        $actual = greet(['Jill', 'Jane']);
        $this->assertEquals("Hello, Jill and Jane.", $actual);
    }
}
