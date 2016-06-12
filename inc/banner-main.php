<div id="banner-main">

  <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
    <ul class="orbit-container">
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>

  <?php 
  $args = array( 'post_type' => 'banners', 'posts_per_page' => 10 );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <li class="orbit-slide" style="max-height:900px;">
        <img class="orbit-image" src="<?php the_field('banner-image'); ?>" alt="<?php the_field('banner-caption'); ?>">
        <figcaption class="orbit-caption"><?php the_field('banner-caption'); ?></figcaption>
    </li>

  <?php endwhile;?>

     
    </ul>
  </div>
  
</div>