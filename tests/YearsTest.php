<?php

class YearsTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function testYearZeroIsLeap()
    {
        $year = new Years(0);
        $this->assertTrue($year->isLeap());
    }
}
