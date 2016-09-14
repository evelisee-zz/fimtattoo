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
			

			// End the loop.
			endwhile;
			?>
			</main><!-- .site-main -->
		</div><!-- .content-area -->

		<div class="col-sm-5">
			<div class="container-bio">

				<figure class="image-author col-sm-3">
					<?php echo userphoto_the_author_photo(); ?>
				</figure>
				<div class="content-about col-sm-9">
					<h4 class="oswald">Postado por</h4>
					<h5>  <?php echo get_the_author(); ?></h5>
					<p>  <?php $id_author = get_the_author_ID(); $user_info = get_userdata($id_author); echo $user_info->description ?>
					</p>
				</div>

				<div style="clear:both;"></div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="container-tags">
				<h4 class="oswald">Tags</h4>
				<p> <?php echo the_tags(); ?></p>
			</div>
		</div>
		<div class="col-sm-3">
			<p>Compartilhe</p>
		</div>
	</div>
</div>

<?php get_footer(); ?>
