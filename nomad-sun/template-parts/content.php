<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nomad_Sun
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



	<header class="entry-header">

	</header><!-- .entry-header -->



	<div class="entry-content">

		<!-- aqui ele vai checar se existe conteúdo dentro das caixas de conteúdo do ACF -->
		<?php if(have_rows('content')): while (have_rows('content')) : the_row();

		// se existir header, puxar o header
		if (get_row_layout()== 'header'): ?>

		<!-- aqui a gente puxa o conteúdo da página content-header -->
				<?php get_template_part( 'template-parts/content-header' ); ?>

				<!-- se existir texto, puxar o texto -->
				<?php elseif(get_row_layout() == 'text_block'): ?>

				<!-- aqui a gente puxa o conteúdo da página content-text -->
				<?php get_template_part( 'template-parts/content-text' ); ?>

				<!-- se existir galeria, puxar galeria -->
				<?php elseif(get_row_layout() == 'gallery'): ?>

				<!-- aqui a gente puxa o conteúdo da página content-gallery -->
				<?php get_template_part( 'template-parts/content-gallery' ) ?>

		<?php endif;
		endwhile; endif; ?>



	</div><!-- .entry-content -->

	<footer class="entry-footer">

	<!-- social links component -->
	<?php get_template_part( 'template-parts/content-share' ) ?>

	<!-- explore component -->
	<?php get_template_part( 'template-parts/content-explore' ) ?>

</footer><!-- entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
