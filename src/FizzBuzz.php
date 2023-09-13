<?php

class FizzBuzz
{
    const FIZZ_MULTIPLIER = 3;
    const BUZZ_MULTIPLIER = 5;
    const FIZZ = 'Fizz';
    const BUZZ = 'Buzz';

    public function print(int $number): string
    {
        if ($this->isMultipleOf($number, self::FIZZ_MULTIPLIER) && $this->isMultipleOf($number, self::BUZZ_MULTIPLIER)) {
            return self::FIZZ . self::BUZZ;
        }

        if ($this->isMultipleOf($number, self::FIZZ_MULTIPLIER)) {
            return self::FIZZ;
        }

        if ($this->isMultipleOf($number, self::BUZZ_MULTIPLIER)) {
            return self::BUZZ;
        }

        return (string)$number;
    }

    private function isMultipleOf(int $number, int $divider): bool
    {
        return ($number % $divider === 0);
    }
}