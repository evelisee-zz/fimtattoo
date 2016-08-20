<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='<?php bloginfo( 'template_directory' ); ?>/assets/css/style.css' rel='stylesheet'>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/html5.js"></script>
	<![endif]-->
	
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header class="holder">
			<div class="content-logo">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo.png">
			</div>
			<div class="content-menu oswald">
				<?php wp_nav_menu( array( 'menu' => 'header-menu' ) ); ?>
			</div>
		</header>