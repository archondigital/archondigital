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
	<div class="row fullwidth">
		<div class="large-12 columns">
			<div class="banner-tag-cloud>
				<?php wp_tag_cloud( 'number=0&smallest=22&largest=90&orderby=RAND' ); ?>	
			</div>
		</div>
	</div>

	<div class="row">
		<div class="large-12 columns">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
			</header><!-- .entry-header -->
		</div>
	</div>
	
	<div class="entry-content">
		<div class="row">
			<div class="large-4 columns">
				
				<?php get_search_form(); ?>
				<?php // wp_get_archives('type=postbypost'); ?>

			</div>

			<div class="large-4 columns">

				<h3>by Month:</h3>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>

			</div>

			<div class="large-4 columns">
				<h3>by Topic:</h3>
				
				<ol>
				  <?php 
				  $wptc = wp_tag_cloud('smallest=1&largest=1&orderby=count&order=DESC&format=array&unit=rem&number=99&echo=0'); 
				  foreach( $wptc as $wpt ) echo "<li>" . $wpt . "</li>\n"; 
				  ?>
				</ol>

				<?php // wp_tag_cloud('format=list'); ?>			
			</div>
		</div>
	</div><!-- .entry-content -->

			
</article><!-- #post-## -->
