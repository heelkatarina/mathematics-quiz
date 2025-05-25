<?php
$score = 0;

while ($answer = isset($_POST['answer']) && $_POST['answer'] == $_GET['answer']) {
    $score++;
}

echo "Your score: " . $score;
?>
