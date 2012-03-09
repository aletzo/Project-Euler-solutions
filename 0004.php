<?php

function isPalindrome($number)
{
    $length = strlen($number);

    $number = str_split($number);

    $halfLength = floor($length / 2);

    for ($i = 0; $i < $halfLength; $i++) {
        $leftDigit = $number[$i];
        $rightDigit = $number[$length - $i - 1];

        if ($leftDigit != $rightDigit) {
            return false;
        }
    }

    return true;
}

function largestPalindrome()
{
    $max = 0;

    for ($i = 100; $i < 1000; $i++) {
        for ($j = 100; $j < 1000; $j++) {
            $number = $i * $j;

            if (isPalindrome($number) && $number > $max) {
                $max = $number;
            }
        }
    }

    return $max;
}   

echo largestPalindrome();
