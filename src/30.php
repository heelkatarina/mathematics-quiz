<?php
// Problem 1.14: Calculate the sum of all even numbers from 2 to n

function calculateEvenSum($n) {
    $sum = 0;
    for ($i = 2; $i <= $n; $i += 2) {
        $sum += $i;
    }
    return $sum;
}

// Example usage:
$number = 10;
$result = calculateEvenSum($number);
echo "The sum of even numbers from 2 to $number is: " . $result;
?>
