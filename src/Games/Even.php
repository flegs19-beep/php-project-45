<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;
const GAME_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function getEvenRound(): array
{
    $number = random_int(MIN_NUMBER, MAX_NUMBER);
    $correctAnswer = isEven($number) ? 'yes' : 'no';
    return [(string) $number, $correctAnswer];
}

function runEvenGame(): void
{
    runGame(
        GAME_DESCRIPTION,
        fn() => getEvenRound()
    );
}
