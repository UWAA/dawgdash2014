<div id="info-bar">
	<ul>
		<?php if(!is_null(get_post_meta(get_the_id(), '_uwaa_mb_dd_race_alt_length', true)) AND get_post_meta(get_the_id(), '_uwaa_mb_dd_race_alt_length', true) != ""){echo "<li>".get_post_meta(get_the_id(), '_uwaa_mb_dd_race_length', true)."</li>";} ?>
		<?php if(!is_null(get_post_meta(get_the_id(), '_uwaa_mb_dd_race_alt_length_1', true)) AND get_post_meta(get_the_id(), '_uwaa_mb_dd_race_alt_length_1', true) != ""){echo "<li>".get_post_meta(get_the_id(), '_uwaa_mb_dd_race_alt_length_1', true)."</li>";} ?>
		<?php if(!is_null(get_post_meta(get_the_id(), '_uwaa_mb_dd_race_alt_length_2', true)) AND get_post_meta(get_the_id(), '_uwaa_mb_dd_race_alt_length_2', true) != ""){echo "<li>".get_post_meta(get_the_id(), '_uwaa_mb_dd_race_alt_length_2', true)."</li>";} ?>
		<br class="responsive-break">
		<?php if(!is_null(get_post_meta(get_the_id(), '_uwaa_mb_dd_race_date', true)) AND get_post_meta(get_the_id(), '_uwaa_mb_dd_race_date', true) != ""){echo "<li>".get_post_meta(get_the_id(), '_uwaa_mb_dd_race_date', true)."</li>";} ?>
		<?php if(!is_null(get_post_meta(get_the_id(), '_uwaa_mb_dd_race_start_time', true)) AND get_post_meta(get_the_id(), '_uwaa_mb_dd_race_start_time', true) != ""){echo "<li>".get_post_meta(get_the_id(), '_uwaa_mb_dd_race_start_time', true)."</li>";} ?>
	</ul>
</div>