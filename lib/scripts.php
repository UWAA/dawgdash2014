<?php
/**
 * Enqueue scripts and stylesheets
 *
 * Enqueue stylesheets in the following order:
 * 1. /theme/assets/css/main.f33c.min.css
 *
 * Enqueue scripts in the following order:
 * 1. jquery-1.11.0.min.js via Google CDN
 * 2. /theme/assets/js/vendor/modernizr-2.7.0.min.js
 * 3. /theme/assets/js/main.min.js (in footer)
 */
function roots_scripts() {
  wp_enqueue_style('roots_main', get_template_directory_uri() . '/assets/css/main.min.css', false, 'd87f08a59eeb1006f0814826f610b4e6');
  wp_enqueue_style('web_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,600,700|Ultra', array(), null, false);
  // jQuery is loaded using the same method from HTML5 Boilerplate:
  // Grab Google CDN's latest jQuery with a protocol relative URL; fallback to local if offline
  // It's kept in the header instead of footer to avoid conflicts with plugins.
  if (!is_admin() && current_theme_supports('jquery-cdn')) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), null, false);
    add_filter('script_loader_src', 'roots_jquery_local_fallback', 10, 2);
  }

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

//
// Flowtype, Modernizr Register
  wp_register_script('hammerjs', get_template_directory_uri() . '/assets/js/vendor/hammerjs-2.0.0-min.js', array(), null, false);
  wp_register_script('flowtype', get_template_directory_uri() . '/assets/js/vendor/flowtype.js', array(), null, false);
  wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.7.0.min.js', array(), null, false);
  wp_register_script('roots_scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), 'cb941cedbcea398184c2975fc791b3bf', true);
  wp_enqueue_script('modernizr');
  wp_enqueue_script('jquery');
  wp_enqueue_script('flowtype');
  wp_enqueue_script('roots_scripts');
}
add_action('wp_enqueue_scripts', 'roots_scripts', 100);

//MapBox Scripts for Race Course Maps
wp_register_script('mapbox', '//api.tiles.mapbox.com/mapbox.js/v1.6.4/mapbox.js', array(), null, false);
wp_register_script('seattle_map', get_template_directory_uri(). '/assets/js/maps/seattle_map.js');
wp_register_script('lightboxInit', get_template_directory_uri(). '/assets/js/lightboxInit.js');


//MapBox Stylesheet for Race Course Map
wp_register_style('mapbox', '//api.tiles.mapbox.com/mapbox.js/v1.6.4/mapbox.css', array(), false, 'screen' );


//Lightbox for main homepage Stylesheet for Race Course Map
wp_register_script('lightbox', get_template_directory_uri().'/assets/js/vendor/jquery.magnific-popup.min.js', array(), null, false);

// http://wordpress.stackexchange.com/a/12450
function roots_jquery_local_fallback($src, $handle = null) {
  static $add_jquery_fallback = false;

  if ($add_jquery_fallback) {
    echo '<script>window.jQuery || document.write(\'<script src="' . get_template_directory_uri() . '/assets/js/vendor/jquery-1.11.0.min.js"><\/script>\')</script>' . "\n";
    $add_jquery_fallback = false;
  }

  if ($handle === 'jquery') {
    $add_jquery_fallback = true;
  }

  return $src;
}
add_action('wp_head', 'roots_jquery_local_fallback');

function roots_google_analytics() { ?>
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','<?php echo GOOGLE_ANALYTICS_ID; ?>');ga('send','pageview');
</script>

<?php }
if (GOOGLE_ANALYTICS_ID && !current_user_can('manage_options')) {
  add_action('wp_footer', 'roots_google_analytics', 20);
}
