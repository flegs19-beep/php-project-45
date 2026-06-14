<?php

namespace Hexlet\Code\Games;

function getGcdRound()
{
    $a = random_int(1, 100);
    $b = random_int(1, 100);

    $x = $a;
    $y = $b;

    while ($y !== 0) {
        $temp = $y;
        $y = $x % $y;
        $x = $temp;
    }

    $question = "$a $b";
    $correct = $x;

    return [$question, $correct];
}