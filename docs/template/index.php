<?php
// CHANGE THESE VARIABLES - learn more at /docs/template/
$title = "Template Documentation"; // Title of this docs page.
$metadesc = "This section helps explain how this template works."; // The meta description for this docs page.
$site = "docs"; // All pages within the docs site share this.
$page = "docs-template"; // Unique value for this page on the docs site.
// Optional Overrides - leave them empty if not using them.
$titleoverride = ""; // Define something other than $title | $sitename (see above and /includes/functions.php)
$socialimageoverride = ""; // Define something unique for this page. (see /includes/docs/functions.php and /includes/functions.php)
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'); // This calls the main functions file, which calls the site functions file and the header.
?>

<h1>Template Documentation</h1>


<h2>Variables</h2>
<p>At the top of every PHP page in this template, there are six available variables you should edit.</p>

<h3>$title</h3>
<p>For this current page, this variable is set to:</p>
<p>$title = "<?php echo $title ?>";</p>
<p>This is the page title, but it is only half of the &#x3c;title> tag that the template creates. The template assumes you want to include the title of the page AND the title of the website in the &#x3c;title> that is displayed by the browser. The title of the website is defined in the main functions file in $sitename variable. The function the_pagetitle builds the &#x3c;title>.</p>
<p>For this current page, the complete &#x3c;title> is:</p>
<p>&#x3c;title><?php echo $title . ' | ' . $sitename ?>&#x3c;/title></p>
<p>The combined title shouldn't be more than <strong>60 characters</strong>, an SEO best practice.</p>
<p>This $title variable is also used in other functions, like the social sharing meta functions.</p>

<h3>$metadesc</h3>
<p>For this current page, this variable is set to:</p>
<p>$metadesc = "<?php echo $metadesc ?>";</p>
<p>This is a meta description. It should be the best sentence or two from the page. It should  be no more than 155 characters long, an SEO best practice.</p>

<h3>$site</h3>
<p>For this current page, this variable is set to:</p>
<p>$site = "<?php echo $site ?>";</p>
<p>This page is part of the <?php echo $site ?>, and this variable is used in function files to determine what CSS and JS assets are included in the header and footer, if applicable.</p>

<h3>$page</h3>
<p>For this current page, this variable is set to:</p>
<p>$page = "<?php echo $page ?>";</p>
<p>Each page needs its own unique ID, declared in one place, here.</p>
<p>The formula for this variable follows the URL structure of the page, and is usually the $site variable plus a hyphen plus the name of the page, or the name of the directory if the page is an index.php file. Following this formula will set you up to be able to guess the page's variable without opening the file to look at it ... which will help later on when you decide to use the variables in functions.</p>
<p>Front pages need "-home" at the end, and this is added automatically by the make-subsite.php function that creates subsite shell structures.</p>


<h2>Optional Overrides</h2>

<h3>$titleoverride</h3>
<p>For this current page, this variable is set to:</p>
<p>
  <?php if ($titleoverride) { 
    echo '$titleoverride = ' . $titleoverride; 
    } else { 
      echo '$titleoverride is not set.';
    }
    ?>
</p>
<p>If you want to override the templated title ( $title | $sitename ) on this page only, use this in addition to $title. But you still need to set $title.</em></p> 

<h3>$socialimageoverride</h3>
<p>For this current page, this variable is set to:</p>
<p>
  <?php if ($socialimageoverride) { 
    echo '$socialimageoverride = ' . $socialimageoverride; 
    } else { 
      echo '$socialimageoverride is not set.';
    }
    ?>
</p>
<p>This overrides the $socialimagesitewide in the site's functions file, which overrides the default image ($socialimage in the main functions file) optimized for social media sharing.</p>
<p>Social images should be 1200 pixels wide by 603 pixels tall.</p>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php') ?>