<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

	$postID		= $post->ID;
	$getslugid = wp_get_post_terms( $post->ID, 'estilo' );
	$slugs = implode(', ',wp_list_pluck($getslugid,'term_id'));

?>


	
<article id="post-<?php the_ID(); ?>" class="col-sm-12" >

	<div class="header-image">
		<div class="date-post">
			<p class="oswald-bold"><?php echo get_the_date('j'); ?></p>
			<p class="oswald"><?php echo get_the_date('F'); ?>  <?php echo get_the_date('Y'); ?></p>
		</div>
		<?php twentyfifteen_post_thumbnail(); ?>
	</div>
	

	<header class="header-post">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="oswald-bold">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	</header><!-- .entry-header -->
	<div class="content-blog">
		<?php
			/* translators: %s: Name of current post */
			the_content();
		?>		
	</div><!-- .entry-content -->

</article><!-- #post-## -->

<div class="about-post">
	<div class="col-sm-2">
		<div class="container-maisposts">
			 <h3 class="roboto">Mais artistas</h3>
		</div>
	</div>

	<?php echo post_relacionados($postID, $slugs); ?>

	<div class="col-sm-3">
		<div class="container-tags">
			<h4 class="oswald">Tags</h4>
				
			<p><?php the_terms( $postID, 'estilo', '', ', ', ' ' ); ?></p>
		</div>
	</div>
	<div class="col-sm-3 share" style="float:right;">
		<div class="container-share">
			<p class="oswald">Compartilhe</p>
			<?php echo do_shortcode('[ssba]'); ?>
		</div>
	</div>
	<div style="clear:both;"></div>
</div>

<div class="coments">
	<?php echo do_shortcode('[fbcomments]'); ?>
</div>


