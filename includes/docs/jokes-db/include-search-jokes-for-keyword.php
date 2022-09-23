<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/docs/jokes-db/include-db-connect.php');

$keywordfromform = $_GET["keyword"];
// echo $keywordfromform;

// search the database for the keyword
echo "<h2>Show all jokes with the word $keywordfromform</h2>";
$sql = "SELECT JokeID, Joke_question, Joke_answer FROM Jokes_table WHERE Joke_question LIKE '%" . $keywordfromform . "%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["JokeID"]. " - Joke Question: " . $row["Joke_question"]. " " . $row["Joke_answer"]. "<br>";
  }
} else {
  echo "0 results";
}

?>