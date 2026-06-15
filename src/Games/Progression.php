<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

const MIN_LENGTH = 5;
const MAX_LENGTH = 10;

const MIN_START = 1;
const MAX_START = 10;

const MIN_STEP = 2;
const MAX_STEP = 5;

const HIDDEN_ELEMENT = '..';

const GAME_DESCRIPTION = 'What number is missing in the progression?';

function getProgressionRound(): array
{
    $length = random_int(MIN_LENGTH, MAX_LENGTH);
    $start = random_int(MIN_START, MAX_START);
    $step = random_int(MIN_STEP, MAX_STEP);

    $progression = [];

    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + ($i * $step);
    }

    $hiddenIndex = random_int(0, $length - 1);
    $correctAnswer = $progression[$hiddenIndex];
    $progression[$hiddenIndex] = HIDDEN_ELEMENT;
    $question = implode(' ', $progression);
    return [$question, (string) $correctAnswer];
}

function runProgressionGame(): void
{
    runGame(
        GAME_DESCRIPTION,
        fn() => getProgressionRound()
    );
}
