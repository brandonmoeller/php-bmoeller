<?php
// CHANGE THESE VARIABLES - learn more at /docs/template/
$title = "lab/oop Title"; // Title of this lab/oop page.
$metadesc = ""; // The meta description for this lab/oop page.
$site = "lab/oop"; // All pages within the lab/oop site share this.
$page = "lab/oop-home"; // Unique value for this page on the lab/oop site. 
// Optional Overrides - leave them empty if not using them.
$titleoverride = ""; // Define something other than $title | $sitename (see above and /includes/functions.php)
$socialimageoverride = ""; // Define something unique for this page. (see /includes/lab/oop/functions.php and /includes/functions.php)
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'); // This calls the main functions file, which calls the site functions file and the header.
?>

<!-- Add Page Content Here -->
<p>lab/oop</p>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php') ?>