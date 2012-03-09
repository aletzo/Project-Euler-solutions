<?php

set_time_limit(1200);

function startSequence($num, $count = 1)
{
    $count = 3 * $num;

    for ($i = 1; $i < $count; $i++) {
        if ($num == 1) {
            return $i;
        }

        if (bcmod($num, 2) == 0) {
            $num = bcdiv($num, 2);
        } else {
            $num = bcadd(bcmul($num, 3), 1);
        }
    }

    return false;
}

function getNumber()
{
    $sequences = array();

    for($i = 1; $i < 1000000; $i++) {
        $count = startSequence($i);

        if ($count === false) {
            echo 'could not find for : ' . $i . '<br>';
        }

        $sequences[$i] = $count;
    }

    sort($sequences);

    end($sequences);

    return key($sequences);
}

echo getNumber();
