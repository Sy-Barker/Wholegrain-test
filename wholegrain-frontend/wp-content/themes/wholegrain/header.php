<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title(''); ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="Vector Web Design">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.vectorwebdesign.co.uk/">
  <meta property="og:image" content="img/hero-1.jpg">

  <link rel="manifest" href="site.webmanifest">
  <link rel="icon" href="favicon.ico" type="image/x-icon" />

  
  <?php wp_head(); ?>
</head>

<body>

<section class="header">
  <div class="container">
    <a class="logo" href="<?php echo esc_url( home_url() ); ?>">
      <img src="http://localhost:81/wholegrain-frontend/wp-content/uploads/2021/06/logo.svg">
    </a><!-- end of .logo -->
    
    <a class="toggle-nav" href="#">&#9776;</a><!-- end of .toggle-nav -->
    <?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>
  </div><!-- end of .container -->
</section><!-- end of section --> 