<?php

class FizzBuzzTest extends PHPUnit\Framework\TestCase
{
    public function testThatReturnSameNumberWhenNotMultipleOfThreeOrFive(): void
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->print(1);
        $this->assertEquals('1', $result);

        $result = $fizzBuzz->print(2);
        $this->assertEquals('2', $result);
    }

    public function testThatReturnFizzWhenMultipleOfThree(): void
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->print(3);
        $this->assertEquals('Fizz', $result);

        $result = $fizzBuzz->print(6);
        $this->assertEquals('Fizz', $result);
    }

    public function testThatReturnBuzzWhenMultipleOfFive(): void
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->print(5);
        $this->assertEquals('Buzz', $result);

        $result = $fizzBuzz->print(10);
        $this->assertEquals('Buzz', $result);
    }
}