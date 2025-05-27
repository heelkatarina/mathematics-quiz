<?php
// Define variables
$studentName = "John Doe";
$subject = "Mathematics";

// Generate quiz questions and answers
echo "<h2>Mathematics Quiz</h2>";
echo "<p>Question 1:</p>";
echo "<select id='maths-select'>";
echo "<option value='A'>Select Option A</option>";
echo "<option value='B'>Select Option B</option>";
echo "</select>";
echo "<br><strong>What is the square root of 16?</strong>";

// Answer selection
if (isset($_POST['submit'])) {
    if ($_POST['maths-select'] == "A") {
        echo "<p>" . $_POST["selectedOption"] . "</p>";
    }
}

// Check user input
if (isset($_POST['userInput']) && $_POST['userInput'] == "John Smith") {
    $correctAnswer = "B";
} else {
    $correctAnswer = "A";
}
?>
