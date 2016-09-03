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


<div class="container">
	
	<div class="row">

    	<section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">

        	<article role="pge-title-content">

            	<header>

                	<h2><span>avana</span> A Brand new Agency.</h2>

                </header>

                <p>This is the story of Avana, a minimal Bootstrap template for creative agency.</p>

            </article>
        </section>

        

        <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">

        	<figure class="effect-oscar">

            	<img src="images/home-images/image-1.jpg" alt="" class="img-responsive"/>

                <figcaption>

                	<h2>Eliana Dedda<span> Identity</span></h2>

					<p>Personal Brand Identity.</p>

					<a href="works-details.html">View more</a>

                </figcaption>

            </figure>

        </section>

        

        <div class="clearfix"></div>

	</div>
</div>

<?php get_footer(); ?>
