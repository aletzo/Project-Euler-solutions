<?php

set_time_limit(1200);

function getTriangle($number) {
    $r = bcadd($number, 1);

    $r = bcmul($r, $number);


    return bcdiv($r, 2);
}

function getDivisorsCount($number) {
    $divisorsCount = 0;

    for($i = 1; $i <= $number; $i++) {
        if (bcmod($number, $i) == 0) {
            $divisorsCount++;
        }
    }

    return $divisorsCount;
}

function getNumber($maxDivisorsCount)
{
    $sum = 0;
        
    $prevSum = 0;

    for ($i = 1; $i < 10000; $i++) {
        $sum = bcadd($prevSum, $i);



        //$triangle = getTriangle($i);

        //$divisorsCount = getDivisorsCount($triangle);
        $divisorsCount = getDivisorsCount($sum);

        if ($divisorsCount > $maxDivisorsCount) {
            //return $triangle;
            return $sum;
        }

        $prevSum = $sum;

        if (bcmod($i, 100) == 0) {
            echo 'loop no ' . $i . ' | sum = ' . $sum . ' | divisors count = '. $divisorsCount . '<br>';
        }
    }

    return 'not yet :(';

}

echo getNumber(500);
