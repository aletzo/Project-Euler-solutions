<?php

function diff($numbers)
{
    $sumOfSquares = 0;
    $sum = 0;

    for ($i = 1; $i < $numbers + 1; $i++) {
        $sumOfSquares += $i * $i;

        $sum += $i;
    }

    return ($sum * $sum ) - $sumOfSquares;

}

$numbers = 100;

echo diff($numbers);
