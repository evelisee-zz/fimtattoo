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
<div class="container padding-top index conteudo">
    <section class='col-xs-12 static-banner' style='padding:0;'>
        <article class='content-static' role='pge-title-content'>
            <header class='oswald-bold'>
                 <?php
						the_archive_title( '<p>', '</p>' );
						the_archive_description( '<p class="oswald-light">', '</p>' );
					?>
            </header>
        </article>
    </section>

    <section class='col-xs-12' style='padding:20px 0;'>
        <div id='masonry-search' class='masonry'>
			<?php 
				echo '<div class="row">';
				while ( have_posts() ) : the_category();
		            $link                   = types_render_field( "link-do-tatuador", array('output' => 'raw')  );
		            $titulo                 = get_the_title();
		            $categorias             = get_the_category( the_post());
		            $Data                   = get_the_date('d-m-Y');
		            $tatuador               = types_render_field( "tatuador");
		            $categoriass = "";

		                foreach( $categorias as $category ) {
		                    $categoriass .= '<button onClick= goToSection("'. get_site_url() . '/category/' . $category->slug .'")><span>' . $category->name . '</span></button>';
		                }

		                echo '<div class="item medium grid">'; 
	                        echo '<a class="fancy" href="' . get_the_post_thumbnail_url() . '" title="'.  get_the_title() . '">';
	                            echo '<figure class="effect-oscar">';
	                               	 	if( has_post_thumbnail() ) {
									echo get_the_post_thumbnail( get_the_ID(), 'foto1', array( 'alt' => get_the_title(), 'title' => get_the_title(),  'class' => 'img-responsive',  ) );
								} else {
									echo '<img src="' . get_bloginfo( 'template_directory' ) . '/images/img-sliderG.jpg" alt="' . get_the_title() . '" title="' . get_the_title() . '" />';
								} 
	                            echo '<figcaption>';
	                                echo '<h2 class="oswald-bold">' .   get_the_title()  . '</h2>';
	                                echo '<p class="author oswald-light"><button onClick= goToPage("' . $link. '")>Tatuador:' . $tatuador . '</button></p>';
	                                echo '<p class="tags oswald-light">Tags:';
	                                echo $categoriass;
	                                echo '</p>';
	                                echo '<p class="date oswald-light"> ' . $Data . '</p>';
	                            echo '</figcaption>';
	                                
	                            echo '</figure>';
		                    echo '</a>';     
		            	echo '</div>';
				endwhile;
				wp_reset_postdata();

			 ?>
		</div>
	</section>
</div>



<?php get_footer(); ?>
