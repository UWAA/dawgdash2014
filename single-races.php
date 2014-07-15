<?php 

// wp_enqueue_script('mapbox');
// wp_enqueue_style('mapbox');
wp_enqueue_script('hammerjs');

// wp_enqueue_script('seattle_map');

?>

<?php while (have_posts()) : the_post(); ?>
  
    <article <?php post_class(); ?>>
    
        
          <div class="container">
          <div class="row">
          <header>
            <h1 class="entry-title"><?php the_title(); ?> Dawg Dash</h1>
            <?php get_template_part('templates/info-bar'); ?>
          </header>
          </div>
        </div>
        
 
       
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      
  </article>

<!-- <div class="map-row"> -->
  <!-- <h2 class="map-title"><?php /*echo get_post_meta(get_the_id(), '_uwaa_mb_dd_race_city', true);*/ ?> Course Map</h2>   Template pulls in course meta data from post --> 
  <!-- <div id="map-container"> -->

 <!--    <nav id='course-ui' class='menu-ui'></nav><div id="map"></div>
  </div>
</div> -->
<footer>

</footer>


<?php endwhile; ?>
