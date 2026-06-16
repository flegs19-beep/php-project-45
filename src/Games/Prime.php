<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

const MIN_NUMBER = 2;
const MAX_NUMBER = 100;
const GAME_DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function run(): void
{
    runGame(
        GAME_DESCRIPTION,
        function (): array {
            $number = random_int(MIN_NUMBER, MAX_NUMBER);

            $correctAnswer = isPrime($number) ? 'yes' : 'no';

            return [(string) $number, $correctAnswer];
        }
    );
}

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
