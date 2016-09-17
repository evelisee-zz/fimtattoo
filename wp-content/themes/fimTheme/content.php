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
			<p> <?php echo the_tags('', ', ', '<br />'); ?></p>
		</div>
	</div>
	<div class="col-sm-3">
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


