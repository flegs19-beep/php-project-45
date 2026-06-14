<?php

namespace Hexlet\Code\Games;

function getPrimeRound()
{
    $number = random_int(2, 100);

    $isPrime = function ($n) {
        if ($n < 2) {
            return false;
        }

        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i === 0) {
                return false;
            }
        }

        return true;
    };

    $correct = $isPrime($number) ? 'yes' : 'no';

    return [$number, $correct];
}