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


<div class="row">
	<div class="large-8 columns">
		<h3>Discussion</h3>

		<div class="callout alert" data-closable>
		  <p style="font-size:80%;">I am moving my commenting to Facebook but will be keeping my Disqus below for a little longer. <br>Feel free to comment on any of these platforms.</p>
		  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>

		<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="10"></div>

		<hr>

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

		<?php // If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) :
			//	comments_template();
		//endif; ?>

	</div>
		
	<div class="large-4 columns">
		<?php get_sidebar(); ?>
	</div>
</div>

	


