<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

function runGame(string $rule, callable $getRoundData)
{
    line('Welcome to the Brain Games!');

    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line($rule);

    for ($i = 0; $i < 3; $i++) {
        [$question, $correct] = $getRoundData();

        line("Question: %s", $question);
        $answer = prompt('Your answer');

        if ((string)$answer !== (string)$correct) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'. Let's try again, %s!", $answer, $correct, $name);
            return;
        }

        line('Correct!');
    }

    line("Congratulations, %s!", $name);
}
