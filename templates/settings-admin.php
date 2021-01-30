<h1>A few options to help get you started</h1>
<?php settings_errors(); ?>
<?php 
	
	$googleapi = esc_attr( get_option( 'google_aip_key' ) );
	$bingapi = esc_attr( get_option( 'bing_aip_key' ) );
	$kwone = esc_attr( get_option( 'meta_one_header' ) );
	$kwtwo = esc_attr( get_option( 'meta_two_header' ) );
	$kwthree = esc_attr( get_option( 'meta_three_header' ) );
	$kwfour = esc_attr( get_option( 'meta_four_header' ) );
	$kwfive = esc_attr( get_option( 'meta_five_header' ) );
	$kwsix = esc_attr( get_option( 'meta_six_header' ) );
	$kwseven = esc_attr( get_option( 'meta_seven_header' ) );
	$kweight = esc_attr( get_option( 'meta_eight_header' ) );
	
?>


<form method="post" action="options.php">
	<?php settings_fields( 'staterwp-settings-group' ); ?>
	<?php do_settings_sections( 'easy_theme_core' ); ?>
	<?php submit_button(); ?>
</form>