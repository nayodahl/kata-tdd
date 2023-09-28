<?php

class PrimeFactorTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function testFactorOfZeroIsEmpty()
    {
        $primeFactor = new PrimeFactor(0);
        $this->assertEquals([], $primeFactor->factorOf());
    }
}
