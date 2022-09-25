<?php
// CHANGE THESE VARIABLES - learn more at /docs/template/
$title = "Keyword search results"; // Title of this lab/jokes-db page.
$metadesc = "Keyword search results."; // The meta description for this lab/jokes-db page.
$site = "lab/jokes-db"; // All pages within the lab/jokes-db site share this.
$page = "lab/jokes-db-search-keyword-results"; // Unique value for this page on the lab/jokes-db site. 
// Optional Overrides - leave them empty if not using them.
$titleoverride = ""; // Define something other than $title | $sitename (see above and /includes/functions.php)
$socialimageoverride = ""; // Define something unique for this page. (see /includes/lab/jokes-db/functions.php and /includes/functions.php)
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'); // This calls the main functions file, which calls the site functions file and the header.
?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/lab/jokes-db/include-db-connect.php');
// require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/lab/jokes-db/include-search-all-jokes.php');
?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/lab/jokes-db/include-search-jokes-for-keyword.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php') ?>