<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<script type="text/javascript">
	(function() {
if ("-ms-user-select" in document.documentElement.style &&
(navigator.userAgent.match(/IEMobile/) ||
navigator.userAgent.match(/ZuneWP7/) ||
navigator.userAgent.match(/WPDesktop/))) {
var msViewportStyle = document.createElement("style");
msViewportStyle.appendChild(
document.createTextNode("@-ms-viewport{width:auto!important}")
);
document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
}
})();
</script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no" />
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
</head>