<?php
$number1 = rand(1, 10);
$number2 = rand(1, 10);
$operation = rand(1, 3);
if($operation == 1){
    $result = $number1 + $number2;
}else if($operation == 2){
    $result = $number1 - $number2;
}else{
    $result = $number1 * $number2;
}
echo "What is $number1 $operation $number2?";
echo "<input type='text' name='answer'><br>";
if(isset($_POST['submit'])){
    if($_POST['answer'] == $result){
        echo "Correct!";
    }else{
        echo "Incorrect, the answer is $result.";
    }
}
?>