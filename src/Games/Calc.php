<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runGame;

const MIN_NUMBER = 1;
const MAX_NUMBER = 20;
const GAME_DESCRIPTION = 'What is the result of the expression?';

function calculate(int $a, int $b, string $operation): int
{
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        default:
            throw new \Exception('Unknown operation');
    }
}

function getCalcRound(): array
{
    $a = random_int(MIN_NUMBER, MAX_NUMBER);
    $b = random_int(MIN_NUMBER, MAX_NUMBER);

    $operations = ['+', '-', '*'];
    $operation = $operations[array_rand($operations)];

    $correctAnswer = calculate($a, $b, $operation);

    return ["{$a} {$operation} {$b}", (string) $correctAnswer];
}

function runCalcGame(): void
{
    runGame(
        GAME_DESCRIPTION,
        fn() => getCalcRound()
    );
}
