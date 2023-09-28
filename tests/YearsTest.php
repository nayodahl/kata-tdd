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

    public function testYearDivisibleBy100ButNotBy400IsNotLeap()
    {
        $year = new Years(1700);
        $this->assertFalse($year->isLeap());

        $year = new Years(1800);
        $this->assertFalse($year->isLeap());

        $year = new Years(1900);
        $this->assertFalse($year->isLeap());

        $year = new Years(2100);
        $this->assertFalse($year->isLeap());
    }

    public function testYearDivisibleBy4ButNotBy100IsLeap()
    {
        $year = new Years(2008);
        $this->assertTrue($year->isLeap());

        $year = new Years(2012);
        $this->assertTrue($year->isLeap());

        $year = new Years(2016);
        $this->assertTrue($year->isLeap());
    }
}
