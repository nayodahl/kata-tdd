<?php

class Years
{

    public function __construct(private readonly int $year)
    {
    }

    public function isLeap(): bool
    {
        if ($this->year % 400 === 0) {
            return true;
        }

        return false;
    }
}