<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package archondigital
 */

?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<div class="large-8 large-centered columns">
				<header class="entry-header">
					
					<div class="entry-meta">
						<?php archondigital_posted_on(); ?>
					</div><!-- .entry-meta -->

				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php
						the_content( sprintf(
							/* translators: %s: Name of current post. */
							wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'archondigital' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						) );

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'archondigital' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php archondigital_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</div>
		</div>
				
	</article><!-- #post-## -->
	