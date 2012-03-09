<?php

$sum = 2;

$prev1 = 2;
$prev2 = 1;

for ($i = 0; $i < 100; $i++) {
    if ($prev2 > 4000000) {
        break;
    }

    $fib = $prev1 + $prev2;
    $prev2 = $prev1;
    $prev1 = $fib;

    if ($fib % 2 == 0) {
        $sum += $fib;
    }
}

echo $sum;
