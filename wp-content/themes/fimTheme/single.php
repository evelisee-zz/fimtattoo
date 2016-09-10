<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="content-grey">
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );

			// End the loop.
			endwhile;
			?>

			</main><!-- .site-main -->
		</div><!-- .content-area -->


		<div class="col-sm-5">
			<div class="container-bio">
				<figure class="image-author col-sm-3">
					<img src="">
				</figure>
				<div class="content-about col-sm-9">
					<h4 class="oswald">Postado por</h4>
					<h5>Nome do fulano</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>

				<div style="clear:both;"></div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="container-tags">
				<h4 class="oswald">Tags</h4>
				<p> <a href="">#tag </a> <a href="">#tag </a> <a href="">#tag </a></p>
			</div>
		</div>
		<div class="col-sm-3">
			<p>Compartilhe</p>
		</div>
	</div>
</div>

<?php get_footer(); ?>
