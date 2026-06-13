<?php

namespace Hexlet\Code\Games;

function getEvenRound()
{
    $number = rand(1, 100);
    $correct = ($number % 2 === 0) ? 'yes' : 'no';

    return [$number, $correct];
}