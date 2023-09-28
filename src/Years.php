<?php

readonly class Years
{

    public function __construct(private int $year)
    {
    }

    public function isLeap(): bool
    {
        if ($this->year % 400 === 0) {
            return true;
        }

        if ($this->year % 100 === 0) {
            return false;
        }

        if ($this->year % 4 === 0) {
            return true;
        }

        return false;
    }
}