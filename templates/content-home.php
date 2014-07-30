<?php
  wp_enqueue_script('lightbox');
  wp_enqueue_script('lightboxInit');
 while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    
    <div class="container">
    <div class="row">
    <header>
        <h2 class="entry-title"><?php the_title(); ?></h2>    
    </header>    
        
        </div>
      </div>
    <div class="entry-content">
      <?php the_content(); ?>
    
    </div>
    

    
          
  </article>

  <div class="info-boxes">
          <?php get_template_part('templates/info-boxes'); ?>
    </div>


   
   
<?php endwhile; ?>
