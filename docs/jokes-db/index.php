<?php
// CHANGE THESE VARIABLES - learn more at /docs/template/
$title = "Database Examples"; // Title of this docs/jokes-db page.
$metadesc = "Database examples."; // The meta description for this docs/jokes-db page.
$site = "docs/jokes-db"; // All pages within the docs/jokes-db site share this.
$page = "docs/jokes-db-home"; // Unique value for this page on the docs/jokes-db site. 
// Optional Overrides - leave them empty if not using them.
$titleoverride = ""; // Define something other than $title | $sitename (see above and /includes/functions.php)
$socialimageoverride = ""; // Define something unique for this page. (see /includes/docs/jokes-db/functions.php and /includes/functions.php)
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'); // This calls the main functions file, which calls the site functions file and the header.
?>
<p>Connecting to a database and displaying its data.</p>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/docs/jokes-db/include-db-connect.php');
// require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/docs/jokes-db/include-search-all-jokes.php');
?>

<form action="/includes/docs/jokes-db/include-search-jokes-for-keyword.php">
  <label for="keyword">Please enter a keyword to search for:</label>
  <input type="text" id="keyword" name="keyword"><br>
  <input type="submit" value="Submit">
</form> 
<div class="spacer medium"></div>
<hr>
<div class="spacer medium"></div>
<form action="/includes/docs/jokes-db/include-add-joke.php">
  <label for="newjoke">Please enter a new joke here:</label>
  <input type="text" id="newjoke" name="newjoke"><br>
  <label for="newanswer">Please enter the answer to your new joke here:</label>
  <input type="text" id="newanswer" name="newanswer"><br>
  <input type="submit" value="Submit">
</form> 

<?php
// require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/docs/jokes-db/include-search-jokes-for-keyword.php');
$mysqli->close();
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php') ?>