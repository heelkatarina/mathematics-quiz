<?php
// Question 1: Find the sum of all even numbers in an array.
$numbers = [2, 4, 6, 8, 10];
echo "The sum of all even numbers is: " . array_sum(array_filter($numbers, function($num) {
    return $num % 2 == 0;
}));

// Question 2: Multiply the first three elements of an array by their respective indices.
$fruits = ['apple', 'banana', 'orange'];
foreach ($fruits as &$fruit) {
    echo "Index " . (int)$fruit[0] . " and value " . $fruit[1] . " are multiplied by 3: " . ($fruit[0] * 3) . " and " . ($fruit[1] * 3);
}
?>
