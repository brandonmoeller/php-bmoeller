<?php
//
// This is the site-specific functions file for the lab/jokes-db site. 
//
// These are the site-specific variables:
$sitecss = "lab/jokes-db"; // Defines the site-specific stylesheet(s)
$sitejs = "lab/jokes-db"; // Defines the site-specific javascript(s)
// Optional Sitewide Overrides - leave them empty if not using them.
$titleoverridesitewide = ""; // Leave blank unless you want to override templated title, sitewide (except for pages that have titleoverrides).
$socialimagesitewide  = ""; // Instead of declaring this on each page, you can declare it here - for a sitewide socialimage. Leaving this blank = whatever is defined at top of main functions file.

// Echo the correct site-specific stylesheet
function the_sitecss()
{
  $GLOBALS['sitecss'];

  if (strcasecmp($GLOBALS['sitecss'], "lab/jokes-db") == 0) {
    echo '<!-- Bootstrap 3.3.7 - Latest compiled and minified CSS -->' . PHP_EOL;
    echo '  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">' . PHP_EOL;
    echo '  <!-- Optional theme -->' . PHP_EOL;
    echo '  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->' . PHP_EOL;
    echo '  <link rel="stylesheet" href="/css/lab/jokes-db/main.css?version=1.0">' . PHP_EOL;
  } else {
    echo '  <!-- Site-specific stylesheet goes here - configurable in site functions.php-->' . PHP_EOL;
  }
}

// Echo the correct site-specific javascript
function the_sitejs()
{
  global $subsite;
  $GLOBALS['sitejs'];

  if (strcasecmp($GLOBALS['sitejs'], "lab/jokes-db") == 0) {
    include($_SERVER['DOCUMENT_ROOT'] . '/includes/lab/jokes-db/site-js.php');
  } else {
    echo '<!-- Site-specific javascript goes here - add it in site functions -->' . PHP_EOL;
  }
}