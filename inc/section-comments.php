<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package archondigital
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>


<div class="row expanded">
	<div id="comments" class="large-6 large-offset-2 columns">
		<h3>Discussion</h3>
			<div>
				<?php get_template_part( 'inc/ads', 'adsense02-leaderboard' ); ?>	
			</div>
		<!-- <div class="callout primary" data-closable>
		  <p style="font-size:80%;">I just started using Facebook Comments plugin as my main commenting tool. <br>Feel free to start up a conversation.</p>
		  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div> -->

		<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="10"></div>

		<hr>

			<?php if ( 'true' == get_field('enable_disqus') ): ?>
    
			<div class="callout warning" data-closable>
			  <p style="font-size:80%;">Disqus has been deprecated on this site. I am only keeping it on posts where there have been enough comments. <br>Sadly, if some posts are missing comments, I will no longer attempt to recover these. I'm done with Disqus for now.</p>
			  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>    

		    <div id="disqus_thread"></div>
			<script>
			    /**
			     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
			     */
			    
			    var disqus_config = function () {
			        
			        this.page.identifier = '<?php the_field ('dsq_thread_id') ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			        this.page.url = '<?php the_permalink(); ?>';  // Replace PAGE_URL with your page's canonical URL variable
			        
			    };
			    
			    (function() {  // DON'T EDIT BELOW THIS LINE
			        var d = document, s = d.createElement('script');
			        
			        s.src = '//archondigital.disqus.com/embed.js';
			        
			        s.setAttribute('data-timestamp', +new Date());
			        (d.head || d.body).appendChild(s);
			    })();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>	
    
			<?php else: ?>
    
			<?php endif; ?>		    



		<?php // If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) :
			//	comments_template();
		//endif; ?>

	</div>
		
	<div class="large-3 columns end">
		<?php 

		if ( function_exists( 'sharing_display' ) ) {
		    sharing_display( '', true );
		}
		 
		if ( class_exists( 'Jetpack_Likes' ) ) {
		    $custom_likes = new Jetpack_Likes;
		    echo $custom_likes->post_likes( '' );
		}
		?>

		<hr>
		
		<?php get_template_part( 'inc/ads', 'buysellads01' ); ?>
		
		<hr>

		<?php get_template_part( 'inc/ads', 'adsense01' ); ?>


		<br>
			
		<?php get_sidebar(); ?>
	</div>
</div>

	


