<?php
// CHANGE THESE VARIABLES - learn more at /docs/template/
$title = "Documentation and Tutorials"; // Title of this docs page.
$metadesc = "This section helps explain how this website works."; // The meta description for this docs page.
$site = "docs"; // All pages within the docs site share this.
$page = "docs-home"; // Unique value for this page on the docs site.
// Optional Overrides - leave them empty if not using them.
$titleoverride = ""; // Define something other than $title | $sitename (see above and /includes/functions.php)
$socialimageoverride = ""; // Define something unique for this page. (see /includes/PLACEHOLDER/functions.php and /includes/functions.php)
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'); // This calls the main functions file, which calls the site functions file and the header.
?>

<h1>Documentation and Tutorials</h1>
<p>A good place to start.</p>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php') ?>