<?php 

wp_enqueue_script('mapbox');
wp_enqueue_style('mapbox');
wp_enqueue_script('hammerjs');


wp_enqueue_script('seattle_map');

wp_enqueue_script('lightbox');
wp_enqueue_script('lightboxInit');

?>

<?php while (have_posts()) : the_post(); ?>
  
    <article <?php post_class(); ?>>
    
        
          <div class="container">
          <div class="row">
          <header>
            <h1 class="entry-title">Dawg Dash <?php the_title(); ?></h1>
            <?php get_template_part('templates/info-bar'); ?>
          </header>
          </div>
        </div>
        
 
       
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      
  </article>


<div class="container-fluid">
 <div id="map-container">
 <nav id='course-ui' class='menu-ui'></nav><div id="map"></div>
  
  </div>
</div>
<footer>

</footer>


<?php endwhile; ?>
