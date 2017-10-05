<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package webontheside
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<!-- THEME INFO -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

<!-- Font Awesome -->
<script defer src="<?php bloginfo('template_url'); ?>/js/packs/light.min.js"></script>
<script defer src="<?php bloginfo('template_url'); ?>/js/packs/brands.min.js"></script>
<script defer src="<?php bloginfo('template_url'); ?>/js/fontawesome.min.js"></script>
<!-- Animate CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<!-- Font -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Arimo|Roboto:100,300,400,500,700" rel="stylesheet">
<!-- Main -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/layout.css">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- Nav menu -->

<div class="navmenu">

	<div class="site-logo-container">
		<img class="site-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/max-white-v2.png" />
	</div>
        

	<?php wp_nav_menu( array( 'theme_location' => 'side-menu', 'fallback_cb' => false, 'container' => false, 'menu_class' => 'site-pages' ) ); ?>

	<a class="m-menu-btn"><span></span></a>

</div>

<div class="m-overlay">
	<?php wp_nav_menu( array( 'theme_location' => 'side-menu', 'fallback_cb' => false, 'container' => false, 'menu_class' => 'm-menu' ) ); ?>
</div>