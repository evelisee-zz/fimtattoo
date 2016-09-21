<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="container padding-top no-padding blog">
	<!-- Static banner -->
	<div class="row no-margin">
		<section class="col-xs-12 no-padding">
	    	<article class="content-static" role="pge-title-content">
	        	<header class="oswald-bold">
	            	<?php
						the_archive_title( '<h2>', '</h2>' );
						the_archive_description( '<p class="oswald-light">', '</p>' );
					?>
	            </header>
	        </article>
	    </section>
    </div>

    <!-- All Banners -->
    <div class="no-margin">
    	
		<?php 

			echo '<div class="row">';
			while ( have_posts() ) : the_post();

				if(($index % 2) == 1){
					echo '</div><div class="row">';
				}

				echo '<section class="col-xs-12 col-sm-6 padding-top">';
					echo '<article class="blog-article">';
						echo '<figure>';
							echo '<div class="data">';
								echo '<p class="oswald-bold">' . get_the_date('j') . '</p>';
								echo '<p class="oswald">'. get_the_date('F') . '  ' . get_the_date('Y') .'</p>';
							echo '</div>';
									if( has_post_thumbnail() ) {
										echo get_the_post_thumbnail( get_the_ID(), 'foto1', array( 'alt' => get_the_title(), 'title' => get_the_title(),  'class' => 'img-responsive',  ) );
									} else {
										echo '<img src="' . get_bloginfo( 'template_directory' ) . '/images/img-sliderG.jpg" alt="' . get_the_title() . '" title="' . get_the_title() . '" />';
									} 
			    			
		    			echo '</figure>';

		    			echo '<div class="container-text">';
		    				echo '<h2 class="oswald-bold">' .  get_the_title(). '</h2>';
		    				echo '<p>'.  get_the_excerpt($posts->ID) .'</p>';
		    				echo '<a href="'. get_permalink( get_the_ID() ) .'" class="oswald">Leia mais [+]</a>';
		    			echo '</div>';
					echo '</article>';
				echo '</section>';

			endwhile;

			wp_reset_postdata();

		?>
    </div>
</div>



<?php get_footer(); ?>
