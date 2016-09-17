<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 * Template Name: Contato 
 */
get_header(); 
?>


<div class="container padding-top contato">
	<div class="header">
		<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/moon.jpg">
	</div>

	<div class="content-fim">
		<div class="row">
			<div class="col-sm-6">
				<h1 class="oswald-bold fixed-content">FIM TATTOO</h1>
				<h2 class="oswald-light fixed-content">Fazer, inspirar, marcar</h2>

				<p class="fixed-content">Tatuagem como arte, inspiração e estilo de vida.</p>
			</div>

			<div class="col-sm-6">
				<?php 
					while ( have_posts() ) : the_post();
						the_content();
					endwhile;
	   				wp_reset_query();
				?>
			</div>
		</div>
	</div>


	<div class="content-contact">
		<h1 class="oswald-bold">Entre em contato</h1>
		<p class="fixed-content">Tem alguma sugestão, dúvida ou quer só trocar uma ideia? Fique a vontade e mande uma mensagem.</p>

		<?php echo do_shortcode('[contact-form-7 id="71" title="contato-fim"]'); ?>
	</div>
</div>


<?php get_footer(); ?>
