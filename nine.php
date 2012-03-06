<?php

function triplet($number)
{
    $a = false;
    $b = false;
    $c = false;

    $verticals = array();

    for ($i = 1; $i < $number; $i++) {
        for ($j = 1; $j < $number; $j++) {
            if ($i > $j) {
                continue;
            }

            $verticals[$i . '|' . $j] = ($i * $i) + ($j * $j);
        }
    }

    for ($k = 1; $k < $number; $k++) {
        foreach ($verticals as $key => $value) {
            if ($k * $k != $value) {
                continue;
            }

            $lines = explode('|', $key);

            $sum = $lines[0] + $lines[1] + $k;

            if ($lines[0] + $lines[1] + $k == 1000) {
                $a = $lines[0];
                $b = $lines[1];
                $c = $k;

                echo $a . '<br />';
                echo $b . '<br />';
                echo $c . '<br />';

                return $a * $b * $c;
            }
        }

    }
}

echo triplet(600);
