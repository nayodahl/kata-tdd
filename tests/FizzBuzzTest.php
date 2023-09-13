<?php

class FizzBuzzTest extends PHPUnit\Framework\TestCase
{
    public function testThatReturnSameNumberWhenNotMultipleOfThreeOrFive(): void
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->print(1);
        $this->assertEquals('1', $result);
    }
}