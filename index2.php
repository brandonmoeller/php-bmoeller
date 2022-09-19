<?php
// CHANGE THESE VARIABLES - learn more at /docs/template/
$title = "Brandon Moeller"; // Title of this homepage page.
$metadesc = "Brandon Moeller is a freelance writer and web developer located near Houston, Texas."; // The meta description for this homepage page.
$site = "homepage"; // All pages within the homepage site share this.
$page = "homepage-home"; // Unique value for this page on the homepage site. 
// Optional Overrides - leave them empty if not using them.
$titleoverride = ""; // Define something other than $title | $sitename (see above and /includes/functions.php)
$socialimageoverride = ""; // Define something unique for this page. (see /includes/homepage/functions.php and /includes/functions.php)
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'); // This calls the main functions file, which calls the site functions file and the header.
?>

<h1>Brandon Moeller</h1>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php') ?>