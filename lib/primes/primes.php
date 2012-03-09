<?php

$primes = explode("\n", file_get_contents('primes.txt'));

function isPrime($number)
{
    //*
    $array = str_split($number);

    $arraySum = array_sum($array);

    $lastNumber = array_pop($array);

    if ($lastNumber % 2 == 0 || $lastNumber == 5) { // this number is even or multiple of 5
        return false;
    }

    if ($arraySum % 9 == 0)  { //this number is multiple of 9
        return false;
    }
    //*/

    for ($i = 3; $i < $number; $i++) { // we don't check for 1 and we have already checked for 2
        if ($number % $i == 0) { // the first check also disqualifies the even numbers
            return false;
        }
    }

    return true;
}
