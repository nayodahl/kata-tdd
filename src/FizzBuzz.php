<?php

class FizzBuzz
{
    const FizzMultiplier = 3;

    const BuzzMultiplier = 5;


    public function print(int $number): string
    {
        if ($number % self::FizzMultiplier === 0) {
            return 'Fizz';
        }

        if ($number % self::BuzzMultiplier === 0) {
            return 'Buzz';
        }

        return (string)$number;
    }
}
