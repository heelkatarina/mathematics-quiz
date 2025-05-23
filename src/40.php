<?php
function sum_numbers($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        if (is_numeric($number)) {
            $sum += $number;
        }
    }
    return $sum;
}
?>
