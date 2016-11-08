<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package archondigital
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();
			
			get_template_part( 'layout/layout', get_post_format() );

		endwhile; // End of the loop.
		?>

		<div id="post-nav">
			<div class="row">
				<div class="large-12 columns">
				<?php the_post_navigation(); ?>		
				</div>	
			</div>
			
		</div>
		

		<?php // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				//comments_template();
				get_template_part( 'inc/section', 'comments' );
			endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();
