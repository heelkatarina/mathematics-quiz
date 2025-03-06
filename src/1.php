<?php
$operations = array('+', '-', '*', '/');
$numbers = array(10, 8, 5, 2);
shuffle($numbers);
$num1 = $numbers[0];
$num2 = $numbers[1];
$op = $operations[rand(0, 3)];
switch ($op) {
    case '+':
        $answer = $num1 + $num2;
        break;
    case '-':
        $answer = $num1 - $num2;
        break;
    case '*':
        $answer = $num1 * $num2;
        break;
    case '/':
        if ($num2 == 0) {
            $answer = "Division by zero is undefined.";
        } else {
            $answer = $num1 / $num2;
        }
        break;
}
echo $num1 . ' ' . $op . ' ' . $num2 . ' = ' . $answer;
?>