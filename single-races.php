<?php 

wp_enqueue_script('mapbox');
wp_enqueue_style('mapbox');
// wp_enqueue_script('seattle_map');  Pull this back out for the NYC Map, and get it on a page/page basis...
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

<?php 
if ($post->post_name == 'seattle' ) {     

echo "<a name=\"coursemap\" class=\"anchor\"></a>";
echo "<div class=\"container-fluid\">";
echo "<div id=\"map-container\">";
echo "<nav id='course-ui' class='menu-ui'></nav>";
echo "<div id=\"map\"></div>";
echo "<div id=\"scrolltop\"><span class=\"oi oi-chevron-top\"></span></div>";
echo "</div>";
echo "</div>";
}
?>

<footer>

</footer>


<?php endwhile; ?>
