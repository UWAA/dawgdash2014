<nav class="navbar navbar-default navbar-fixed-top race-hamburger-navbar" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <?php get_template_part('templates/patch'); ?>
      <a class="pull-right hamburger-toggle" data-toggle="collapse" data-target="#race-hamburger">
        <span class="sr-only">Toggle navigation</span>
        RACES
      </a>      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="race-hamburger">
       <?php
          if (has_nav_menu('primary_navigation')) :
      		wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav hamburger'));
      		endif;
      	?>
     
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
