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

    public function testSuccess_2namesUppercase()
    {
        $actual = greet(['JILL', 'JANE']);
        $this->assertEquals("HELLO JILL AND JANE!", $actual);
    }

    public function testSuccess_lowerCaseNames()
    {
        $actual = greet(["Amy", "Brian", "Charlotte", "Jeff"]);
        $this->assertEquals("Hello, Amy, Brian, Charlotte, and Jeff.", $actual);
    }

    public function testSuccess_upperCaseNames()
    {
        $actual = greet(["AMY", "BRIAN", "CHARLOTTE", "JEFF"]);
        $this->assertEquals("HELLO AMY, BRIAN, CHARLOTTE, AND JEFF!", $actual);
    }

    public function testSuccess_bothCaseNames1()
    {
        $actual = greet(["Amy", "Brian", "Charlotte", "Jeff", "AMY", "BRIAN", "CHARLOTTE", "JEFF"]);
        $this->assertEquals("Hello, Amy, Brian, Charlotte, and Jeff. AND HELLO AMY, BRIAN, CHARLOTTE, AND JEFF!", $actual);
    }

    public function testSuccess_bothCaseNames2()
    {
        $actual = greet(["Amy", "BRIAN", "Charlotte", "Jeff", "ALEX"]);
        $this->assertEquals("Hello, Amy, Charlotte, and Jeff. AND HELLO BRIAN AND ALEX!", $actual);
    }

    public function testSuccess_bothCaseNames3()
    {
        $actual = greet(["Amy", "BRIAN", "Charlotte", "Jeff"]);
        $this->assertEquals("Hello, Amy, Charlotte, and Jeff. AND HELLO BRIAN!", $actual);
    }
}
