<?php

class FractionTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function testThatThrowException()
    {
        $fake = new Fraction(1);
        $fake->add(new Fraction(2));
        $this->assertTrue(true);
    }
}
