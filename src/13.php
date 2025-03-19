
<?php 
    $question = "What is the sum of 2 + 2?";
    $answer = 4;
    if (isset($_POST['submit'])) {
        $userAnswer = $_POST['answer'];
        if ($userAnswer == $answer) {
            echo "<p style='color: green'>Correct! The sum of 2 + 2 is indeed 4.</p>";
        } else {
            echo "<p style='color: red'>Incorrect. The correct answer is 4.</p>";
        }
    }
?>
<form method="post">
    <label for="answer">What is the sum of 2 + 2?</label>
    <input type="text" id="answer" name="answer"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>