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
	<link href='<?php bloginfo( 'template_directory' ); ?>/assets/css/plugins/bootstrap.min.css' rel='stylesheet'>
	<link href='<?php bloginfo( 'template_directory' ); ?>/assets/css/font-awesome.css' rel='stylesheet'>
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
				<nav class="pull-left">
					<?php wp_nav_menu( array( 'menu' => 'header-menu' ) ); ?>
				</nav>
				<div class="search pull-right">
					<button class="btn-clear"><i class="fa fa-search"></i></button>
				</div>
				<div style="clear:both;"></div>
			</div>
		</header>


<div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                    <li><a href="">Page 1</a>
                    </li>
                    <li><a href="">Page 2</a>
                    </li>
                    <li><a href="">Page 3</a>
                    </li>

              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
