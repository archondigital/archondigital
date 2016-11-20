<?php
/*
Template Name: Home
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php get_template_part( 'inc/banner', 'main' ); ?>

			<div class="row fullwidth">
				<div class="large-4 columns">
					&nbsp;
				</div>

				<div class="large-4 columns text-center">
					<a href="#about"><i class="fa fa-chevron-down fa-4x arrow-down" aria-hidden="true"></i></a>
				</div>

				<div class="large-4 columns">
					<?php get_template_part( 'inc/ads', 'buysellads01' ); ?>
				</div>
				
			</div>

			<div id="about" class="about fullscreen" data-stellar-background-ratio="0.3">
				
				<div class="callout">
					<h1>About</h1>
					<div class="row fullwidth">
						<div class="large-4 columns large-push-2 text-right">
							
						</div>
						
						<div class="large-4 large-pull-2 columns">

							<h2>Hi, I'm Jon, I run Archon Digital.</h2>
							
							<p>I’m a front end developer who started out as a graphic designer in print before shifting to design and development on the web. Archon Digital is my blog, my personal repository of thoughts in digital form.</p>

							<p>When I am not at work, I take photographs of the street life around me either in film or on digital.</p>

							<p>Learn more <a href="/about/">about me</a> and this website.</p>

						</div>

					</div>	
				</div>
			</div>	

			<div class="row fullwidth">
				<div class="large-4 columns">
					&nbsp;
				</div>

				<div class="large-4 columns text-center">
					<a href="#blog"><i class="fa fa-chevron-down fa-4x arrow-down" aria-hidden="true"></i></a>	
				</div>

				<div class="large-4 columns">
					&nbsp; <?php // get_template_part( 'inc/ads', 'buysellads01' ); ?>
				</div>
				
			</div>

			<div id="blog">
				<div class="row">
					<div class="large-12 columns">
						<div class="text-center">
							<h2>Blog</h2>
							<p class="lead"><em>A repository of thoughts, my consciousness in digital form.</em></p>
						</div>	
					</div>
				</div>
				
				
				<?php rewind_posts(); ?>
				<?php $home_query = $wp_query; ?>
				<!-- Do stuff... -->

				<?php query_posts( 'posts_per_page=5' ); ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
				<?php endwhile; ?>

				<?php $wp_query = $home_query; ?>

				<div id="post-nav">
					<div class="row">
						<div class="large-12 columns text-center">
						<a href="/blog">More articles</a>
						</div>	
					</div>				
				</div>
			</div>		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
