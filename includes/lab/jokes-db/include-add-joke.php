<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/lab/jokes-db/include-db-connect.php');

$new_joke_question = $_GET["newjoke"];
$new_joke_answer = $_GET["newanswer"];

// 
echo "<h2>Trying to add a new joke: $new_joke_question and $new_joke_answer</h2>";
$sql = "INSERT INTO Jokes_table (JokeID, Joke_question, Joke_answer) VALUES (NULL, '$new_joke_question', '$new_joke_answer')";

$result = $mysqli->query($sql);

require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/lab/jokes-db/include-search-all-jokes.php');

?>