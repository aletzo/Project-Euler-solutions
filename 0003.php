<?php

function divide($num, $div, $divs = array())
{
    if (bcmod($num, $div) == 0) {
        $divs[] = $div;

        $division = bcdiv($num, $div);

        return divide($division, $div, $divs);
    }

    return array($num, $divs);
}

function largestPrime($number)
{
    $nums = array();

    for ($i = 2; $i < 10000; $i++) {
        list($number, $div) = divide($number, $i);

        $nums[] = $div;
    }

    $max = 0;

    foreach ($nums as $num) {
        if (isset($num[0]) && $num[0] > $max) {
            $max = $num[0];
        }
    }

    return $max;
}


$number = 600851475143;

echo largestPrime($number);
