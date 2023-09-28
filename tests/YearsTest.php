<?php

class YearsTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function testYearZeroIsLeap()
    {
        $year = new Years(0);
        $this->assertTrue($year->isLeap());
    }

    public function testYearDivisibleBy400IsLeap()
    {
        $year = new Years(400);
        $this->assertTrue($year->isLeap());

        $year = new Years(800);
        $this->assertTrue($year->isLeap());

        $year = new Years(2000);
        $this->assertTrue($year->isLeap());
    }
}
