<?php

namespace Hexlet\Code\Games;

function getProgressionRound()
{
    $length = random_int(5, 10);
    $start = random_int(1, 10);
    $step = random_int(2, 5);

    $progression = [];

    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }

    $hiddenIndex = random_int(0, $length - 1);
    $correct = $progression[$hiddenIndex];

    $progression[$hiddenIndex] = '..';

    $question = implode(' ', $progression);

    return [$question, $correct];
}
