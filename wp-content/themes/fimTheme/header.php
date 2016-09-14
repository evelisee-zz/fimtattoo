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
	<link href='<?php bloginfo( 'template_directory' ); ?>/assets/css/effects.css' rel='stylesheet'>
	<link href='<?php bloginfo( 'template_directory' ); ?>/assets/css/component.css' rel='stylesheet'>
	<link href='<?php bloginfo( 'template_directory' ); ?>/assets/css/plugins/bootstrap.min.css' rel='stylesheet'>
	<link href='<?php bloginfo( 'template_directory' ); ?>/assets/css/font-awesome.css' rel='stylesheet'>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/html5.js"></script>
	<![endif]-->
	
	<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header>
			<div class="content-logo">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo.png">
			</div>

			<div class="container content-menu">
				<div class="content-button">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div style="clear:both;"></div>
				</div>
				<nav id="navbar" class="oswald navbar-collapse collapse">
					<div class="pull-left">
						<?php wp_nav_menu( array( 'menu' => 'header-menu' ) ); ?>
					</div>
					<div class="search pull-right">
						<button class="btn-clear"><i class="fa fa-search"></i></button>
					</div>
				</nav>
			</div>
		</header>


