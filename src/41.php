<?php
// Example PHP code for a simple math quiz

function calculate_math_quiz() {
    $questions = [
        "What is 2 + 3?",
        "Which number is not divisible by 5?",
        "What is the value of x in the equation y = 4x + 7?"
    ];

    // Randomly select one question
    $randomQuestion = randomInt(0, count($questions) - 1);

    return $questions[$randomQuestion];
}

function printQuiz() {
    echo calculate_math_quiz();
}

printQuiz(); // Run the quiz function to check the user's answers

// Example PHP code to generate a random integer between 1 and 10
function getRandomNumber() {
    return rand(1, 10);
}
