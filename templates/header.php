<header class="banner" role="banner">
	<div class="patch-container"><?php get_template_part('templates/patch'); ?>
        <a class="homelink" href="<?php echo home_url('/') ?>"></a>
    </div>
      <nav class="nav-main" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav dd-nav'));
          endif;
        ?>
      </nav>
</header>
