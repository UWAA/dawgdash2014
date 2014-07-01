<div id="info-bar">
	<ul>
		<li><?php echo get_post_meta(get_the_id(), '_uwaa_mb_dd_race_length', true); ?></li>
		<li><?php if(!is_null(get_post_meta(get_the_id(), '_uwaa_mb_dd_race_alt_length_1', true))){echo get_post_meta(get_the_id(), '_uwaa_mb_dd_race_alt_length_1', true);} ?></li>
		<li><?php if(!is_null(get_post_meta(get_the_id(), '_uwaa_mb_dd_race_alt_length_2', true))){echo get_post_meta(get_the_id(), '_uwaa_mb_dd_race_alt_length_2', true);} ?></li>
		<li><?php echo get_post_meta(get_the_id(), '_uwaa_mb_dd_race_date', true); ?></li>
		<li><?php echo get_post_meta(get_the_id(), '_uwaa_mb_dd_race_start_time', true); ?></li>
	</ul>
</div>