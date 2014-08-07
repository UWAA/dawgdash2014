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
		<p>
		<?php echo get_post_meta($post->ID, '_uwaa_mb_dd_race_length', true);  
		echo '<br/>';
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
		
		<?php
		if ($post->post_name == 'seattle') {
			echo '<div class="link-button">';
			echo '<a href="'.wp_get_shortlink().'" role="button">';
			echo "register now</a>";
		} else {
			echo '<div class="link-button">';
			echo '<a href="" class="disabled" role="button">';
			echo "coming soon</a>";
		}

		?>
		</div>
		</div>
		</div>




<?php endforeach; ?>

</div>

