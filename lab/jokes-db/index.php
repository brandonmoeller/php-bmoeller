<?php
// CHANGE THESE VARIABLES - learn more at /docs/template/
$title = "Database Examples"; // Title of this lab/jokes-db page.
$metadesc = "Database examples."; // The meta description for this lab/jokes-db page.
$site = "lab/jokes-db"; // All pages within the lab/jokes-db site share this.
$page = "lab/jokes-db-home"; // Unique value for this page on the lab/jokes-db site. 
// Optional Overrides - leave them empty if not using them.
$titleoverride = ""; // Define something other than $title | $sitename (see above and /includes/functions.php)
$socialimageoverride = ""; // Define something unique for this page. (see /includes/lab/jokes-db/functions.php and /includes/functions.php)
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'); // This calls the main functions file, which calls the site functions file and the header.
?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/lab/jokes-db/include-db-connect.php');
// require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/lab/jokes-db/include-search-all-jokes.php');
?>

<div class="row">
  <div class="col-12">
    <h1>Search for a Joke in the Database</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    <p>&nbsp;</p>
    <!-- Form builder : https://bootsnipp.com/forms -->
    <form class="form-horizontal" action="/lab/jokes-db/search-keyword-results.php">
      <fieldset>
        <!-- Form Name -->
        <!-- <legend>Search for a joke in the database</legend> -->
        <!-- Search input-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="keyword">Search Input</label>
          <div class="col-md-6">
            <input id="keyword" name="keyword" type="search" placeholder="e.g. chicken" class="form-control input-md" required="">
            <p class="help-block">Enter a word to search for in the joke table</p>
          </div>
        </div>
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-2 control-label" for="submit"></label>
          <div class="col-md-4">
            <button id="submit" name="submit" class="btn btn-primary">Search</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
<!-- </div> -->
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="row">
  <div class="col-12">
    <h1>Add a Joke</h1>
    <form class="form-horizontal" action="/includes/lab/jokes-db/include-add-joke.php">
      <fieldset>
        <!-- Form Name -->
        <!-- <legend>Add a Joke</legend> -->
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="newjoke">New Joke</label>
          <div class="col-md-6">
            <input id="newjoke" name="newjoke" type="text" placeholder="" class="form-control input-md">
            <span class="help-block">Enter the first half of your joke.</span>
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="newanswer">New Answer</label>
          <div class="col-md-6">
            <input id="newanswer" name="newanswer" type="text" placeholder="" class="form-control input-md">
            <span class="help-block">Enter the second half of your joke.</span>
          </div>
        </div>
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-2 control-label" for="submit"></label>
          <div class="col-md-4">
            <button id="submit" name="submit" class="btn btn-primary">Add a New Joke</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
<?php
// require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/lab/jokes-db/include-search-jokes-for-keyword.php');
$mysqli->close();
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php') ?>