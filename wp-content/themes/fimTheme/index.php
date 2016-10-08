<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="container padding-top index">
	<div class="row">
		<div id='masonry'>
	      <?php lista_posts_home(); ?>
	    </div>
    </div>
</div>


<!-- <div class="container padding-top index">

	<div class="row">
		<section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 static-banner" style="padding-left:0;">
        	<article class="content-static" role="pge-title-content">
            	<header class="oswald-bold">
                	<h2>Inspiração</h2>
                </header>
                <p class="oswald-light">Esse é o fim da falta de inspiração para tatuagens.</p>
            </article>

			<section class="col-xs-6 col-sm-6 col-md-6 col-lg-6 grid padding-top" style="padding-left:0;">
				<?php lista_posts(0); ?>
			</section>

			<section class="col-xs-6 col-sm-6 col-md-6 col-lg-6 grid padding-top" style="padding-right:0;">
				<?php lista_posts(1); ?>
			</section>

        </section>



		<section class="col-xs-12 col-sm-3 col-md-3 col-lg-3 grid list-avulse">
			<?php lista_posts(2); ?>
		</section>

		<section class="col-xs-12 col-sm-3 col-md-3 col-lg-3 grid " style="padding-right:0;">
			<?php lista_posts(3); ?>
		</section>
	</div>
</div> -->


<?php get_footer(); ?>
