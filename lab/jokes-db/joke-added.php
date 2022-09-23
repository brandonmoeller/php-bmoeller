<?php
$title = "Database Examples - Redesign";
$metadesc = "Database examples.";
$site = "dev";
$page = "dev-redesign-examples-db";
// Optional Overrides - leave them empty if not using them.
$titleoverride = "";
$mainheaderoverride = "Joke Added";
$socialimageoverride = "";
$headerbackground = "";
// require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php');
?>


<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/lab/jokes-db/include-db-connect.php');

$new_joke_question = $_GET["newjoke"];
$new_joke_answer = $_GET["newanswer"];

// 
echo "<h2 class=\"sub thinner\">Trying to add a new joke: $new_joke_question and $new_joke_answer</h2>";
$sql = "INSERT INTO Jokes_table (JokeID, Joke_question, Joke_answer) VALUES (NULL, '$new_joke_question', '$new_joke_answer')";

$result = $mysqli->query($sql);

require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/lab/jokes-db/include-search-all-jokes.php');

?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php') ?>