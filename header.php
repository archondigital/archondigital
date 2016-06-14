<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package archondigital
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<meta property="fb:app_id" content="138528675742" />

<?php wp_head(); ?>


<?php global $wp_query; $postid = $wp_query->post->ID; wp_reset_query(); ?>
<?php if ( 'true' == get_field('custom_layout') ): ?>
    <style type="text/css">
    <?php the_field('custom_css'); ?>
    </style>
<?php endif; wp_reset_query(); ?>

</head>

<body <?php body_class(); ?>>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-431457-5', 'auto');
  ga('send', 'pageview');

</script>

<!-- Facebook SDK for JavaScript -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '138528675742',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div id="page" class="site">
	<a class="skip-link screen-reader-text hide" href="#main"><?php esc_html_e( 'Skip to content', 'archondigital' ); ?></a>
		
	<header id="masthead" class="site-header" role="banner">

		<div data-sticky-container>
		  <div class="title-bar" data-sticky data-options="marginTop:0;" style="width:100%" data-top-anchor="1" data-btm-anchor="content:bottom">
		    
		    <div class="title-bar-left">
				
				
					<?php
					if ( is_front_page() && is_page('home') ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
					endif;?>
				

		    </div>

		    <div class="title-bar-right">
		    	<button data-open="site-navigation" class="menu-icon dark hide-for-large" type="button" data-toggle=""></button>

		    	<div class="hide-for-small-only"><?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?></div>

				<nav id="site-navigation" class="reveal large main-navigation" role="navigation" data-reveal>
					
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

					<button class="close-button" data-close aria-label="Close modal" type="button">
					<span aria-hidden="true">&times;</span>
					</button>
				</nav>			    	
		    </div>

		  </div>
		</div>		


		<!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
