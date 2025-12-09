<?php

function sum($a, $b) {
    return $a + $b;
}

echo "Sum Function:<br>";
echo "sum(5, 3) = " . sum(5, 3) . "<br>";
echo "sum(10, 25) = " . sum(10, 25) . "<br>";
echo "sum(100, 200) = " . sum(100, 200) . "<br><br>";

function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

echo "Factorial Function:<br>";
echo "factorial(5) = " . factorial(5) . "<br>";
echo "factorial(0) = " . factorial(0) . "<br>";
echo "factorial(7) = " . factorial(7) . "<br><br>";

function is_prime($n) {
    if ($n < 2) {
        return false;
    }
    if ($n == 2) {
        return true;
    }
    if ($n % 2 == 0) {
        return false;
    }
    for ($i = 3; $i <= sqrt($n); $i += 2) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "Prime Number Checker:<br>";
$numbers = [2, 7, 10, 13, 15, 17, 20, 23, 25, 29];

foreach ($numbers as $num) {
    $result = is_prime($num) ? "is prime" : "is not prime";
    echo $num . " " . $result . "<br>";
}

?>