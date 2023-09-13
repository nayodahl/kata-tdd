<?php

class FizzBuzz
{
    public function print(int $number): string
    {
        if ($number % 3 === 0){
            return 'Fizz';
        }

        return (string) $number;
    }
}
