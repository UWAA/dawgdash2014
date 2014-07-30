<?php
  wp_enqueue_script('lightbox');
  wp_enqueue_script('lightboxInit');
 while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
            
    </header>
    <div class="entry-content">
    <div class="copy-container">
    <div class="copy-row">
    <div class="copy-columns">
    <h2 class="entry-title"><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div>
    </div>
    </div>
    </div>

  

    <div class="info-boxes">
          <?php get_template_part('templates/info-boxes'); ?>
    </div>
   
    <footer>
      <?php /*wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>'));*/ ?>
    </footer>
    
  </article>
<?php endwhile; ?>
