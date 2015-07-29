    <a id="main-content" href="#main_content" class='screen-reader-shortcut'>Skip to main content</a>

    <div id="uw-container">

    <div id="uw-container-inner">

    <header class="uw-thinstrip">

  <div class="container">
    <a href="http://uw.edu" title="University of Washington Home" class="uw-patch">University of Washington</a>
    <a href="http://uw.edu" title="University of Washington Home" class="uw-wordmark" tabindex='-1' aria-hidden='true'>University of Washington</a>
  </div>
  <div class='align-right'>
      <nav class="uw-thin-strip-nav" role='navigation' aria-label='audience based'>
          <ul class="uw-thin-links">
            <li><a href="http://uw.edu/studentlife" title="Students">Students</a></li>
            <li><a href="http://uw.edu/parents" title="Parents">Parents</a></li>
            <li><a href="http://uw.edu/facultystaff" title="Faculty & Staff">Faculty & Staff</a></li>
            <li><a href="http://uw.edu/alumni" title="Alumni">Alumni</a></li>
          </ul>
      </nav>
      
  </div>

</header>

<header class="banner" role="banner">   
<div class="patch-container">
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
