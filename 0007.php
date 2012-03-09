<?php

function getPrimeNumber($num)
{
    $count = 2; // we skip prime numbers 2 and 3
    $prime = 0;

    for ($i = 5; $i < 1000000; $i++) {
        if ($i % 2 == 0) {
            continue;
        }

        $isPrime = true;

        for ($j = 3; $j < $i; $j++) {
            if ($i % $j == 0) {
                $isPrime = false;

                break;
            }
        }

        if ( ! $isPrime) {
            continue;
        }

        $count++;

        if ($count == $num) {
            $prime = $i;

            break;
        }
    }

    return $prime;

}

$num = 10001;

echo getPrimeNumber($num);
