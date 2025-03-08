<?php
$math_concepts = array(
"Addition",
"Subtraction",
"Multiplication",
"Division",
"Algebraic equations",
);

shuffle($math_concepts);
$concepts = array_slice($math_concepts, 0, 3);

echo $concepts[0].', '.$concepts[1].', '.$concepts[2];
?> 