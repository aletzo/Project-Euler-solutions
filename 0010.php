<?php

require_one 'lib/primes/primes.php';


function sumOfPrimes($number)
{
    $sum = 0;

    for ($i = 2; $i < $number; $i++) {
        if (isPrime($i)) {
            $sum = bcadd($sum, $i);
        }

        if ($i % 100 == 0) {
            echo $i . ' checked <br>';
        }
    }

    return $sum;
}

echo sumOfPrimes(100000);
