<?php

class TennisGameTest extends PHPUnit_Framework_TestCase
{
    public function testInput1ShouldBe1()
    {
        $fizzbuzz = new FizzBuzz(1);
        $response = $fizzbuzz->toString();
        $this->assertEquals('1', $response);
    }
}
