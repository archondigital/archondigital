<?php
/*
Template Name: Archives
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div>
				<?php wp_tag_cloud( 'number=0&smallest=22&largest=90&orderby=RAND' ); ?>
			</div>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'layout/layout', 'archive' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
