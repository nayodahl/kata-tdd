<?php

class FizzBuzzTest extends PHPUnit\Framework\TestCase
{
    public function testThatReturnSameNumberWhenNotMultipleOfThreeOrFive(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('1', $fizzBuzz->print());
    }
}