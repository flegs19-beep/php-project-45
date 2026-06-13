<?php

namespace Hexlet\Code\Games;

function getProgressionRound()
{
    $length = rand(5, 10);
    $start = rand(1, 10);
    $step = rand(2, 5);

    $progression = [];

    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }

    $hiddenIndex = rand(0, $length - 1);
    $correct = $progression[$hiddenIndex];

    $progression[$hiddenIndex] = '..';

    $question = implode(' ', $progression);

    return [$question, $correct];
}