<?php
// Generate a random number between 1 and 5
$randomNumber = rand(1, 5);

// Check if the number is even or odd
if ($randomNumber % 2 == 0) {
    echo "The number $randomNumber is even";
} else {
    echo "The number $randomNumber is odd";
}
?>