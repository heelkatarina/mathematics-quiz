<?php
// Define constants for questions and answers
$questions = [
    "What is 2 + 2?", 
    "3 - 1 =", 
    "5 * 4 =", 
    "6 / 2 =", 
    "8 ^ 3 =", 
    "7 × 7 =", 
    "9 ÷ 3 =", 
    "10 + 5 =",
];
// Define answers for the questions
$answers = [
    "4", 
    "2", 
    "20", 
    "20", 
    "48", 
    "49", 
    "3"
];

// Function to check student's answers against correct ones
function verifyAnswers($studentAnswer, $correctAnswer) {
    return ($studentAnswer === $correctAnswer);
}

// Main code for the quiz
echo "Please answer these math problems:\n";
foreach ($questions as $index => $question) {
    echo $questions[$index] . ": " . $answers[$index] . "\n";
}
?>
