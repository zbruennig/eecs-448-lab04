<?php
$correct = array("Coppersmith", "Gymnasium", "Witch", "Ore",
"Games in the Dominion Series");

$response = array($_POST["question1"]!="" ? $_POST["question1"] : "[No answer]",
                  $_POST["question2"]!="" ? $_POST["question2"] : "[No answer]",
                  $_POST["question3"]!="" ? $_POST["question3"] : "[No answer]",
                  $_POST["question4"]!="" ? $_POST["question4"] : "[No answer]",
                  $_POST["question5"]!="" ? $_POST["question5"] : "[No answer]");



echo "Question 1: Which of the following is NOT in the base card set (no expansions) of Dominon?<br>";
echo "You answered: " . $response[0] . "<br>";
echo "Correct answer: " . $correct[0] . "<br><br>";

echo "Question 2: In Betrayal at House on the Hill, all of the following rooms have exactly one exit except which?<br>";
echo "You answered: " . $response[1] . "<br>";
echo "Correct answer: " . $correct[1] . "<br><br>";

echo "Question 3: Which role in the One Night series of games is from the Daybreak expansion?<br>";
echo "You answered: " . $response[2] . "<br>";
echo "Correct answer: " . $correct[2] . "<br><br>";

echo "Question 4: What resource in Settlers of Catan is required to make a Development Card but not a Settlement?<br>";
echo "You answered: " . $response[3] . "<br>";
echo "Correct answer: " . $correct[3] . "<br><br>";

echo "Question 5: Which of these number is the highest?<br>";
echo "You answered: " . $response[4] . "<br>";
echo "Correct answer: " . $correct[4] . "<br><br>";

$questions = count($correct);
$correctAnswers = 0;

for($i = 0; $i<$questions; $i++)
{
  if($response[$i] == $correct[$i])
  {
    $correctAnswers++;
  }
}

echo "You answered " . $correctAnswers . " questions correctly.<br>";
echo "That is " . round($correctAnswers*100/$questions) . "%.<br>"

?>
