<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package archondigital
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<br><br>
				<header>
					<div class="row">
						<div class="large-12 columns">
							<h1 class="page-title text-center"><?php single_post_title(); ?></h1>		
							<p class="lead text-center"><em>A repository of my thoughts, what I capture around me, my consciousness in digital form.</em></p>
						</div>
					</div>
				</header><br><br>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile; ?>

			<div id="post-nav">
				<div class="row">
					<div class="large-12 columns">
					<?php the_posts_navigation(); ?>
					</div>	
				</div>				
			</div>


		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
