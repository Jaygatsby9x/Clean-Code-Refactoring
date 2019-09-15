<?php
include_once('isBuzz.php');
class FizzBuzzTest extends TestCase
{
    public function testFizz3()
    {
        $number = 3;
        $expected = "Fizz";
        $result = new isBuzz($number);
        $this->assertEquals($expected, $result);
    }
    public function testFizz6()
    {
        $number = 6;
        $expected = "Fizz";
        $result = new isBuzz($number);
        $this->assertEquals($expected, $result);
    }
    public function testFizz5()
    {
        $number = 5;
        $expected = "Buzz";
        $result = new isBuzz($number);
        $this->assertEquals($expected, $result);
    }
    public function testFizz15()
    {
        $number = 15;
        $expected = "FizzBuzz";
        $result = new isBuzz($number);
        $this->assertEquals($expected, $result);
    }
    public function testFizz7()
    {
        $number = 7;
        $expected = $number."";
        $result = new isBuzz($number);
        $this->assertEquals($expected, $result);
    }
}