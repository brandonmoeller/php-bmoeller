<!DOCTYPE html>
<html lang="en">
<head>
  <?php the_pagetitle(); ?>
  <?php the_metadesc(); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/css-main.php'); ?>
<?php the_sitecss(); ?>
<?php the_printcss(); ?>
  <link rel="canonical" href="<?php echo ('https://' . $_SERVER['SERVER_NAME'] . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>">
  <?php the_socialsharingmeta(); ?>
</head>
<body>