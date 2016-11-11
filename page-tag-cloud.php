<?php
/*
Template Name: Tag Cloud
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();?>

				<?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>

				<?php wp_tag_cloud( 'number=0&smallest=22&largest=90&orderby=RAND' ); ?>

				<?php endif; ?>

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
