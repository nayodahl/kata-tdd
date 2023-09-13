<?php

class FizzBuzz
{
    const FizzMultiplier = 3;

    public function print(int $number): string
    {
        if ($number % self::FizzMultiplier === 0) {
            return 'Fizz';
        }

        if ($number % 5 === 0) {
            return 'Buzz';
        }

        return (string)$number;
    }
}
