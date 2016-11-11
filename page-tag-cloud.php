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

				<h2>Popular Tags</h2>
				<ul>
					<li><?php wp_tag_cloud( 'smallest=8&largest=22' ); ?></li>
				</ul>

				<?php endif; ?>

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
