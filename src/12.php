  <?php 
    $question = array("What is the sum of 2+2?", "What is the product of 3*4?","What is the difference between 6 and 10?" );
     $answer = array (3,12,"6");
     shuffle($question);
     shuffle($answer);
      $quiz_name ="Mathematics quiz";
       echo "$quiz_name" . "<br>";
        foreach ($question as $key=>$value) {
         echo "Q:".$question[$key]."<br>"; 
          echo "A:". $answer[$key]. "<br><br>";
      }
    ?>