<?php
//
// NOTE
// 
// This is the global functions file for the website, which is included on every page at the top of the file. 
//
// Default Variables. Change them to make this site your own.
$sitename = "brandonmoeller.com"; // Change to the name of your website. Used in <title>.
$siteurl = "https://brandonmoeller.com"; // Change to your website URL. Used in social media functions. No '/' at the end, please.
$description = "Brandon Moeller is a freelance writer and web developer located near Houston, Texas."; // Used in meta description functions.
$socialimage = "/images/social-image.webp"; // 1200 width x 603 height in pixels; used in social media meta functions.
//
// Include the site-specific functions first.
function getSiteFunction()
{
  switch (strtolower($GLOBALS['site'])) {
    case 'subsite':
      return '/includes/subsite/functions.php';
    case 'homepage':
      return '/includes/homepage/functions.php';
		case 'docs':
			return '/includes/docs/functions.php';
		case 'docs/jokes-db':
			return '/includes/docs/jokes-db/functions.php';
		// PLACEHOLDER
    default:
      return null; // needs a better default return perhaps
  }
}
include($_SERVER['DOCUMENT_ROOT'] . getSiteFunction());

// Output the page title as defined in each page. Allow for an override.
function the_pagetitle()
{
  $GLOBALS['title'];
  $GLOBALS['titleoverride'];
  $GLOBALS['titleoverridesitewide'];
  $GLOBALS['sitename'];

  if ($GLOBALS['titleoverride']) {
    echo '<title>' . $GLOBALS['titleoverride'] . '</title>' . PHP_EOL;
  } elseif ($GLOBALS['titleoverridesitewide']) {
    echo '<title>' . $GLOBALS['titleoverridesitewide'] . '</title>' . PHP_EOL;
  } else {
    echo '<title>' . $GLOBALS['title'] . ' | ' . $GLOBALS['sitename'] . '</title>' . PHP_EOL;
  }
}

// This function is used in /includes/social-sharing-meta.php	
function the_socialimage()
{
  $GLOBALS['socialimageoverride'];
  $GLOBALS['socialimagesitewide'];
  $GLOBALS['siteurl'];

  if ($GLOBALS['socialimageoverride']) {
    echo $GLOBALS['siteurl'] . $GLOBALS['socialimageoverride'];
  } elseif ($GLOBALS['socialimagesitewide']) {
    echo $GLOBALS['siteurl'] . $GLOBALS['socialimagesitewide'];
  }
  // hard set something - see default variable above
  else {
    echo $GLOBALS['socialimage'];
  }
}

// Output the meta description correctly
function the_metadesc()
{
  $GLOBALS['metadesc'];
  $GLOBALS['description'];

  // If there is a metadesc defined on the page, display it. Otherwise, scold in outputted HTML.	
  if ($GLOBALS['metadesc']) {
    echo '<meta name="description" content="' . $GLOBALS['metadesc'] . '">' . PHP_EOL;
  } else {
    echo '<meta name="description" content="' . $GLOBALS['description'] . '">' . PHP_EOL;
  }
}

function the_printcss()
{
  include($_SERVER['DOCUMENT_ROOT'] . '/includes/css-print.php');
}

// This function is used in /includes/social-sharing-meta.php	
function the_titleonly()
{
  $GLOBALS['title'];
  $GLOBALS['sitename'];

  if ($GLOBALS['title']) {
    echo $GLOBALS['title'];
  } else {
    echo $GLOBALS['sitename'];
  }
}

// This function is used in /includes/social-sharing-meta.php	
function the_metadesconly()
{
  $GLOBALS['metadesc'];

  if ($GLOBALS['metadesc']) {
    echo $GLOBALS['metadesc'];
  } else {
    echo $GLOBALS['description']; // Default meta description defined above.
  }
}

// Include the social sharing meta tags
function the_socialsharingmeta()
{
  include($_SERVER['DOCUMENT_ROOT'] . '/includes/social-sharing-meta.php');
}

// Finally, at the very bottom of the main functions file, include the header
include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');