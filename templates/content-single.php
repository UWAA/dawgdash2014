<?php 
//For single posts in the blog

while (have_posts()) : the_post();

 ?>


  <article <?php post_class(); ?>>
     <div class="container">
          <div class="row">
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    </div>
    </div>
    <div class="entry-content">
    <div class="copy-container"><div class="copy-row"><div class="copy-columns">
      <?php the_content(); ?>
    </div></div></div></div>
    <div class="container">
    <div class="row">
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    </div></div>
     
  </article>
<?php endwhile; ?>
