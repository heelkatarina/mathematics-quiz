
<?php

$concepts = array("arithmetic", "geometry", "trigonometry", "algebra", "calculus");
$randomConcept = $concepts[array_rand($concepts)];

$quizQuestions = array(
    "What is the value of x in the equation 2x + 5 = 11?",
    "Find the area of a rectangle with a length of 4 cm and a width of 5 cm.",
    "Solve for x in the equation y = mx + b, where m = 2 and b = 3.",
    "Simplify the expression (x^2 + 5x + 6) / (x + 2)",
    "Find the equation of a line that passes through the points (2, 3) and (5, 8)."
);

$randomQuestion = $quizQuestions[array_rand($quizQuestions)];

echo "$randomConcept: $randomQuestion";

?>