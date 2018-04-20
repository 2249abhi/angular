<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no" />
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title><?php wp_title('|', true, 'right') ?> <?php bloginfo('name')?></title>
<!-- <title>Ultimate Ears | Product Guide</title> -->
    <?php wp_head() ?>
</head>

<body <?php body_class( array('guide_page', 'fp-viewing-one') ); ?>>

<?php
get_sidebar('guide'); 
?>


<!--GUIDE STEPS STARTS-->

<header class="headfixed">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> <a href="<?php echo site_url()?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" alt=""></a> </div>
    </div>
  </div>
</header>