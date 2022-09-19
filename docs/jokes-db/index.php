<?php
// CHANGE THESE VARIABLES - learn more at /docs/template/
$title = "Tutorial: Jokes Database"; // Title of this docs/jokes-db page.
$metadesc = ""; // The meta description for this docs/jokes-db page.
$site = "docs/jokes-db"; // All pages within the docs/jokes-db site share this.
$page = "docs/jokes-db-home"; // Unique value for this page on the docs/jokes-db site. 
// Optional Overrides - leave them empty if not using them.
$titleoverride = ""; // Define something other than $title | $sitename (see above and /includes/functions.php)
$socialimageoverride = ""; // Define something unique for this page. (see /includes/docs/jokes-db/functions.php and /includes/functions.php)
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'); // This calls the main functions file, which calls the site functions file and the header.
?>

<!-- Add Page Content Here -->
<p>docs/jokes-db</p>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php') ?>