<?php

// we strip the range [1, 20] down to 2, 3, 4, 5, 7, 9, 11, 13, 17 and 19
// and then down to :

$numbers = array(
    2,  // 4 hmmm we only need 2
    3,  // 9 hmmm we only need 3
    4,  // 16 hmmm we only need 4
    210, // 2 * 3 * 5 * 7
    46189 // 11 * 13 * 17 * 19

);

// 24 = 2 * 3 * 4

// 24 * 210 = 5040

// 5040 * 46189 = 232792560

$number = 232792560;

foreach (range(1, 20) as $num) {
    echo $number % $num;
    echo "<br>";
}
