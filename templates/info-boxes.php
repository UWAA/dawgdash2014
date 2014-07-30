<div class="container">

<?php

$args = array(
	'post_type'=> 'races',
	'orderby '=> 'post_date',
	'order' => 'ASC',
	);

$racePosts = get_posts($args);

foreach ($racePosts as $post):  ?>
		
		<div class="info-box">
		<div class="info-box-content">
		<h2> <?php echo get_post_meta($post->ID, '_uwaa_mb_dd_race_city', true); ?></h2>
		<p><?php echo get_post_meta($post->ID, '_uwaa_mb_dd_race_length', true); ?></p>
		<p><?php 
			if(!is_null(get_post_meta(get_the_id(), '_uwaa_mb_dd_race_alt_length_1', true)) AND get_post_meta(get_the_id(), '_uwaa_mb_dd_race_alt_length_1', true) != "" )
				{
					echo get_post_meta(get_the_id(), '_uwaa_mb_dd_race_alt_length_1', true);
				}

			if(!is_null(get_post_meta(get_the_id(), '_uwaa_mb_dd_race_alt_length_2', true)) AND get_post_meta(get_the_id(), '_uwaa_mb_dd_race_alt_length_2', true) != "")
				{
					echo " &#149; ";
					echo  get_post_meta(get_the_id(), '_uwaa_mb_dd_race_alt_length_2', true);
				} 

			?>
			</p>
		<p><?php echo get_post_meta(get_the_id(), '_uwaa_mb_dd_race_date', true); ?></p>
		<p><?php echo get_post_meta(get_the_id(), '_uwaa_mb_dd_race_start_time', true); ?></p>
		<div class="link-button">
		<a href="<?php echo wp_get_shortlink(); ?>">
		<?php
		if ($post->ID == 5) {
			echo "register now";
		} else {
			echo "learn more";
		}

		?>
		</a>
		</div>
		</div>
		</div>




<?php endforeach;
	

// echo get_post_meta(5, '_uwaa_mb_dd_race_length', true);
	

// 		echo '<h1>' . get_the_title() . '</h1>';
// 		echo '<h1>' . get_the_id() . '</h1>';
// 		echo get_post_meta(get_the_id(), '_uwaa_mb_dd_race_length', true);
		// echo '<h1>' . get_post_meta($post->ID, '_uwaa_mb_dd_race_date', true) . '</h1>';
		// echo '<h1>' . get_post_meta($post->ID, '_uwaa_mb_dd_race_city', true) . '</h1>';

//DEBUG
// echo "<pre>";
//  print_r($post);
// echo "</pre>";
?>

</div>

