<?php
// Keep some or all of these notes below for further reference.
// Available variables you can use on this page include:
// $title = ""; - This is the page title. Should only be a few words. See /includes/functions.php for rest of templated title.
// $metadesc = ""; - This is a meta description. It should be the best sentence or two from the page.
// $site = "homepage"; - Used in function files to determine CSS, JS, etc.
// $page = "homepage-home"; - Each page needs its own unique ID, declared in one place, here. Format directory-directory-filename... Front pages need "-home."
// Optional Overrides
// $titleoverride = ""; - If you want to override the templated title ( $title | Bauer College of Business at UH ) on this page only, use this in addition to $title. But you still need to set $title. 
// $socialimageoverride = "/images/subsite/socialimage.png"; - This overrides the $socialimagesitewide, which overrides the default image optimized for social media sharing.
//
// CHANGE THESE FOUR
$title = "docs Title"; 
$metadesc = ""; // docs meta description.
$site = "docs"; 
$page = "docs-home"; 
// Optional Overrides - leave them empty if not using them.
$titleoverride = "";
$socialimageoverride = "";
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'); // This calls the main functions file, which calls the site functions file and the header.
?>

<!-- Add Page Content Here -->
<p>docs</p>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php') ?>