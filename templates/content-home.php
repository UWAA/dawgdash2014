<?php

  wp_enqueue_script('lightbox');
 while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
            
    </header>
    <div class="entry-content">
    <h2 class="entry-title"><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div>

    <div class="dd_info_boxes">
      <!-- Will be where our three special boxes come from -->
    </div>
   
    <footer>
      <?php /*wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>'));*/ ?>
    </footer>
    
  </article>
<?php endwhile; ?>
