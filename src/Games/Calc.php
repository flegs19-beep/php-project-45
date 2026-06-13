<?php

namespace Hexlet\Code\Games;

function getCalcRound()
{
    $a = rand(1, 20);
    $b = rand(1, 20);

    $operations = ['+', '-', '*'];
    $operation = $operations[array_rand($operations)];

    switch ($operation) {
        case '+':
            $correctAnswer = $a + $b;
            break;
        case '-':
            $correctAnswer = $a - $b;
            break;
        default:
            $correctAnswer = $a * $b;
    }

    return ["{$a} {$operation} {$b}", $correctAnswer];
}