<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
<!-- <div class="container-fluid"> -->

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->


  <?php
  get_template_part('templates/race-hamburger-menu');  
  do_action('get_header');
  get_template_part('templates/header');
  ?>

  <div class="wrap" role="document">
    <div class="content row">
      <main class="main" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->
  <!-- </div> -->
  <?php get_template_part('templates/footer'); ?>


</body>
</html>
