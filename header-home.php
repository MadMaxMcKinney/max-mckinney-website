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
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Arimo|Roboto:100,300,400,500,700" rel="stylesheet">
<!-- Main -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/layout.css">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- Nav menu -->

<div class="navmenu">

	<div class="site-logo-container">
		<a href="/"><img class="site-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/max-white-v2.png" /></a>
	</div>


	<?php //wp_nav_menu( array( 'theme_location' => 'side-menu', 'fallback_cb' => false, 'container' => false, 'menu_class' => 'site-pages' ) ); ?>

	<ul id="menu-main-menu" class="site-pages">
		<li><a href="https://www.linkedin.com/in/mckinneymax" target="_blank"><i class="fab fa-lg fa-linkedin"></i></a></li>
		<li><a href="https://medium.com/@maxmckinney" target="_blank"><i class="fab fa-lg fa-medium"></i></a></li>
		<li><a href="https://500px.com/maxmckinney" target="_blank"><i class="fab fa-lg fa-500px"></i></a></li>
		<li><a href="https://dribbble.com/MaxMcKinney" target="_blank"><i class="fab fa-lg fa-dribbble"></i></a></li>
		<li><a href="https://twitter.com/timmaxmckinney" target="_blank"><i class="fab fa-lg fa-twitter"></i></a></li>
		<li><a href="https://github.com/MaxMcKinney" target="_blank"><i class="fab fa-lg fa-github"></i></a></li>
	</ul>

	<a class="m-menu-btn"><span></span></a>

</div>

<div class="m-overlay">
	<?php wp_nav_menu( array( 'theme_location' => 'side-menu', 'fallback_cb' => false, 'container' => false, 'menu_class' => 'm-menu' ) ); ?>
</div>