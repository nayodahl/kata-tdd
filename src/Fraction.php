<?php

class Fraction
{
    public function __construct(private int $number)
    {
    }

    public function add(Fraction $a): Fraction
    {
        return $this;
    }
}
