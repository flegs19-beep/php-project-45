<?php

namespace Hexlet\Code\Games;

function getGcdRound()
{
    $a = rand(1, 100);
    $b = rand(1, 100);

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