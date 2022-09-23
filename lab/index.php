<?php
// CHANGE THESE VARIABLES - learn more at /docs/template/
$title = "lab Title"; // Title of this lab page.
$metadesc = ""; // The meta description for this lab page.
$site = "lab"; // All pages within the lab site share this.
$page = "lab-home"; // Unique value for this page on the lab site. 
// Optional Overrides - leave them empty if not using them.
$titleoverride = ""; // Define something other than $title | $sitename (see above and /includes/functions.php)
$socialimageoverride = ""; // Define something unique for this page. (see /includes/lab/functions.php and /includes/functions.php)
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'); // This calls the main functions file, which calls the site functions file and the header.
?>

<!-- Add Page Content Here -->
<p>lab</p>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php') ?>