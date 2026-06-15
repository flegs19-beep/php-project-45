<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;
const GAME_DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function getGcd(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }

    return $a;
}

function getGcdRound(): array
{
    $a = random_int(MIN_NUMBER, MAX_NUMBER);
    $b = random_int(MIN_NUMBER, MAX_NUMBER);
    $correctAnswer = getGcd($a, $b);
    return ["{$a} {$b}", (string) $correctAnswer];
}

function runGcdGame(): void
{
    runGame(
        GAME_DESCRIPTION,
        fn() => getGcdRound()
    );
}
