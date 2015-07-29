<?php
  wp_enqueue_script('lightbox');
  wp_enqueue_script('lightboxInit');
 while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    
    
    <div class="entry-content">
    <div class="copy-container">

    <div class="copy-row">
    <div class="copy-columns">
    <h1 class="entry-title"><?php the_title(); ?></h1> 
      <?php the_content(); ?>
  </div>
  </div>
  </div>
    
    </div>
    


    
          
  </article>

     <div class="info-boxes">
          <?php get_template_part('templates/info-boxes'); ?>
    </div>

 


   
   
<?php endwhile; ?>
