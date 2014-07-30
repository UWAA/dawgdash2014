<div class="row">
<div class="container">

<?php

$racePosts = get_posts( 'post_type=races');

foreach ($racePosts as $post):
		echo '<h1>' . get_the_title() . '</h1>';
		echo '<h1>' . get_the_id() . '</h1>';
		echo get_post_meta(get_the_id(), '_uwaa_mb_dd_race_length', true);
		echo '<h1>' . get_post_meta($post->ID, '_uwaa_mb_dd_race_date', true) . '</h1>';
		echo '<h1>' . get_post_meta($post->ID, '_uwaa_mb_dd_race_city', true) . '</h1>';
// echo "<pre>";
//  print_r($post);
// echo "</pre>";
endforeach;
	

echo get_post_meta(5, '_uwaa_mb_dd_race_length', true);
	


?>

</div>
</div>
