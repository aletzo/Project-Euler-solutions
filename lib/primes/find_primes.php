<?php


require_once 'primes.php';

function findPrimes($number)
{
    try {
        $start = microtime(true);

        $file = 'primes.txt';

        $current = file_get_contents($file);

        $array = explode("\n", $current);

        $primes = array_slice($array, 0, -1);

        $lastPrime = end($primes);

        $newPrimes = array();

        $limit = $lastPrime + $number;

        for ($i = $lastPrime + 1; $i < $limit; $i++) {
            if (isPrime($i)) {
                $newPrimes[] = $i;
            }
        }

        $newContent = "\n" . implode("\n", $newPrimes);

        file_put_contents($file, $current . $newContent);

        $newPrimesCount = count($newPrimes);

        $oldPrimesCount = count($primes);

        $total = $newPrimesCount + $oldPrimesCount;

        $end = microtime(true);

        $diff = $end - $start;

        $diff = number_format($diff, 2);

        return 'added ' . $newPrimesCount . ' new prime numbers in ' . $diff . ' seconds! ' . $total . ' in total!';
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

if ($_POST) {
    $result = findPrimes((integer) $_POST['number']);
} else {
    $result = false;
}

?>

<!doctype html>
<html>
    <head>
        <title>find prime numbers</title>
    </head>
    <body>
        <h1>find prime numbers</h1>
        <?php if ($result) : ?>
            <h2><?php echo $result ?></h2>
        <?php endif ?>
        <form method="post" action="">
            <label><span>how many?</span>
                <input type="text" name="number" value="<?php echo $_POST ? (integer) $_POST['number'] : 1000 ?>" />
            </label>
            <input type="submit" value="go!" />
        </form>
    </body>
</html>
