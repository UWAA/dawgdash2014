<article <?php post_class(); ?>>
 <div class="container">
  <div class="row">
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  </div></div>
   <div class="container">
  <div class="row">
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
  </div></div>
  </article>
  
