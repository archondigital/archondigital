<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package archondigital
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if(has_post_thumbnail()) :?>
	<div style="background-image: url(<?php the_post_thumbnail_url(); ?>); padding: 40rem 0 0 0; background-size:cover; background-position:top center; margin-bottom:2.25rem; background-repeat:no-repeat;" data-stellar-background-ratio="0.3">
		<div class="row fullwidth" style="background: rgba(0,0,0,0.5);">
			<div class="large-12 columns">
				<header class="entry-header" style="padding:2.25rem 0 0 0;">
					<?php the_title( '<h1 class="entry-title text-center" style="color:#fff;">', '</h1>' ); ?>
				</header><!-- .entry-header -->
			</div>
		</div>	
	</div>

	<?php else :?>
	<div>
		<div class="row fullwidth">
			<div class="large-12 columns">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
				</header><!-- .entry-header -->
			</div>
		</div>	
	</div>
	<?php endif;?>
			
	<div class="row">
		<div class="large-8 large-centered columns">
			<div class="entry-content">
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'archondigital' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php
					edit_post_link(
						sprintf(
							/* translators: %s: Name of current post */
							esc_html__( 'Edit %s', 'archondigital' ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						),
						'<span class="edit-link">',
						'</span>'
					);
				?>
			</footer><!-- .entry-footer -->
		</div>
	</div>

			
</article><!-- #post-## -->
