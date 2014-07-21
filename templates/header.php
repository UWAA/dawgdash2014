<header class="banner" role="banner">
	<div class="patch-container"><?php get_template_part('templates/patch'); ?></div>
        <!-- <a class="brand" href="<?php /*echo home_url('/')*/ ?>"><?php /*bloginfo('name');*/ ?></a> -->
      <nav class="nav-main" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav dd-nav'));
          endif;
        ?>
      </nav>
</header>
</div>  <!-- end branding/header (UW style) -->