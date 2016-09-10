<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 * Template Name: Artistas 
 */
get_header(); 
?>


<div class="container padding-top no-padding blog">
	<!-- Static banner -->
	<div class="row no-margin">
		<section class="col-xs-12 no-padding">
	    	<article class="content-static" role="pge-title-content">
	        	<header class="oswald-bold">
	            	<h2>Artistas</h2>
	            	<p class="oswald-light">Contanto, estilos e fotos.</p>
	            </header>
	        </article>
	    </section>
    </div>

    <!-- All Banners -->
    <div class="row no-margin">
    	<?php lista_artistas(); ?>
    </div>
</div>


<?php get_footer(); ?>
