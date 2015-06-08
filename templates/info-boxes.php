<div class="container">

<?php

$args = array(
	'post_type'=> 'races',
	'orderby '=> 'post_date',
	'order' => 'ASC',
	);

$racePosts = get_posts($args);

foreach ($racePosts as $post):  ?>


<?php
		if (get_post_meta(get_the_id(), '_uwaa_mb_dd_front_info_box_link', true)) {			
			echo '<a href="'.get_post_meta(get_the_id(), '_uwaa_mb_dd_front_info_box_link', true).'">';			
	
		} else {			
			echo '<a class="disabled">';
			
		}

		?>
		
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
		if (get_post_meta(get_the_id(), '_uwaa_mb_dd_front_info_box_text', true)) {
			echo '<a href="'.get_post_meta(get_the_id(), '_uwaa_mb_dd_front_info_box_link', true).'">';
			echo '<div class="link-button">';						
			echo ''. get_post_meta(get_the_id(), '_uwaa_mb_dd_front_info_box_text', true).'</a>';		
		}  else {
			echo '<a class="disabled">';
			echo '<div class="link-button">';			
			echo "coming soon</a>";
		}

		?>
		</div>
		</div>
		</div>
		</a>



<?php endforeach; ?>

</div>

