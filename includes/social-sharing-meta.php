<?php // Define your own, if wanted: <meta property="fb:app_id" content="INSERT FB DEV API ID HERE" /> ?>
<meta property="og:url" content="<?php echo('https://' . $_SERVER['SERVER_NAME'] . parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php the_titleonly();?>" />
  <meta property="og:description" content="<?php the_metadesconly();?>" />
  <meta property="og:image" content="<?php the_socialimage();?>" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="603" />
  <meta name="twitter:card" content="summary_large_image">
  <?php // Define your own, if wanted: <meta name="twitter:site" content="@brandonmoeller"> ?>
<meta name="twitter:title" content="<?php the_titleonly();?>">
  <meta name="twitter:description" content="<?php the_metadesconly();?>">
  <meta name="twitter:image" content="<?php the_socialimage();?>">
