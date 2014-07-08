<?php 

wp_enqueue_script('mapbox');
wp_enqueue_style('mapbox');


wp_enqueue_script('seattle_map');

?>
<? //php get_template_part('templates/header'); ?>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
   <?php get_template_part('templates/info-bar'); ?>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <h2 class="map-title"><?php echo get_post_meta(get_the_id(), '_uwaa_mb_dd_race_city', true); ?> Course Map</h2>  <!-- Template pulls in course meta data from post -->
    <div id="map-container"><nav id='course-ui' class='menu-ui'></nav><div id="map"></div></div>
    
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
