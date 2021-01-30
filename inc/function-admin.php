<?php
/*
	
@package smooththeme
	
	========================
		ADMIN PAGE
	========================
*/
function easy_theme_add_admin_page() {
	
	//Generate Easy Theme Admin Page
	add_menu_page( 'Easy Theme Options', 'StarterPageWp', 'manage_options', 'easy_theme_core', 'easy_theme_core_create_page', get_template_directory_uri() . '/img/starterpagewp.png', 20 );
	
		//Generate Easy Theme Admin Sub Pages
		add_submenu_page( 'easy_theme_core', 'Starterwp Setup', 'Start Here', 'manage_options', 'easy_theme_core', 'easy_theme_core_create_page' );
		
	
		// Activate custom settings
	
		add_action( 'admin_init', 'easy_theme_custom_settings');
}
add_action( 'admin_menu', 'easy_theme_add_admin_page' );

	function easy_theme_custom_settings(){
		//SEO Options

	register_setting( 'staterwp-settings-group', 'google_aip_key' );
	register_setting( 'staterwp-settings-group', 'bing_aip_key' );
	register_setting( 'staterwp-settings-group', 'meta_one_header' );
	register_setting( 'staterwp-settings-group', 'meta_two_header' );
	register_setting( 'staterwp-settings-group', 'meta_three_header' );
	register_setting( 'staterwp-settings-group', 'meta_four_header' );
	register_setting( 'staterwp-settings-group', 'meta_five_header' );
	register_setting( 'staterwp-settings-group', 'meta_six_header' );
	register_setting( 'staterwp-settings-group', 'meta_seven_header' );
	register_setting( 'staterwp-settings-group', 'meta_eight_header' );
	register_setting( 'staterwp-settings-group', 'meta_nine_header' );
	register_setting( 'staterwp-settings-group', 'meta_ten_header' );

	add_settings_section( 'starterwp-seo-options', 'SEO Option', 'starterwp_seo_back_options', 'easy_theme_core');
	
	add_settings_field( 'google-api', 'Google API Key', 'google_api_key_seo', 'easy_theme_core', 'starterwp-seo-options');
	add_settings_field( 'bing-api', 'Bing API KEY', 'bing_api_key_seo', 'easy_theme_core', 'starterwp-seo-options');
	add_settings_field( 'meta-one', 'Key Word One', 'meta_one_header_kw', 'easy_theme_core', 'starterwp-seo-options');
	add_settings_field( 'meta-two', 'Key Word Two', 'meta_two_header_kw', 'easy_theme_core', 'starterwp-seo-options');
	add_settings_field( 'meta-three', 'Key Word Three', 'meta_three_header_kw', 'easy_theme_core', 'starterwp-seo-options');
	add_settings_field( 'meta-four', 'Key Word Four', 'meta_four_header_kw', 'easy_theme_core', 'starterwp-seo-options');
	add_settings_field( 'meta-five', 'Key Word Five', 'meta_five_header_kw', 'easy_theme_core', 'starterwp-seo-options');
	add_settings_field( 'meta-six', 'Key Word Six', 'meta_six_header_kw', 'easy_theme_core', 'starterwp-seo-options');
	add_settings_field( 'meta-seven', 'Key Word Seven', 'meta_seven_header_kw', 'easy_theme_core', 'starterwp-seo-options');
	add_settings_field( 'meta-eight', 'Key Word Eight', 'meta_eight_header_kw', 'easy_theme_core', 'starterwp-seo-options');

	

	

	}
	function starterwp_seo_back_options() {
	}
	function google_api_key_seo() {
		$googleapi = esc_attr( get_option( 'google_aip_key' ) );
		echo '<input type="text" name="google_aip_key" value="'.$googleapi.'" placeholder="Google code here" /><a class="button button-seccondary" href="https://search.google.com/search-console/ownership">VERIFY YOUR PROPERTY</a>
		<p class="description">Add your google verification code.</p>';
	}
	function bing_api_key_seo() {
		$bingapi = esc_attr( get_option( 'bing_aip_key' ) );
		echo '<input type="text" name="bing_aip_key" value="'.$bingapi.'" placeholder="Bing code here" /><a class="button button-seccondary" href="https://www.bing.com/toolbox/webmaster">VERIFY YOUR PROPERTY</a>
		<p class="description">Add your Bing verification code.</p>';
	}
	function meta_one_header_kw() {
		$kwone = esc_attr( get_option( 'meta_one_header' ) );
		echo '<input type="text" name="meta_one_header" value="'.$kwone.'" placeholder="keyword" />';
	}
	function meta_two_header_kw() {
		$kwtwo = esc_attr( get_option( 'meta_two_header' ) );
		echo '<input type="text" name="meta_two_header" value="'.$kwtwo.'" placeholder="keyword" />';
	}
	function meta_three_header_kw() {
		$kwthree = esc_attr( get_option( 'meta_three_header' ) );
		echo '<input type="text" name="meta_three_header" value="'.$kwthree.'" placeholder="keyword" />';
	}
	function meta_four_header_kw() {
		$kwfour = esc_attr( get_option( 'meta_four_header' ) );
		echo '<input type="text" name="meta_four_header" value="'.$kwfour.'" placeholder="keyword" />';
	}
	function meta_five_header_kw() {
		$kwfive = esc_attr( get_option( 'meta_five_header' ) );
		echo '<input type="text" name="meta_five_header" value="'.$kwfive.'" placeholder="keyword" />';
	}
	function meta_six_header_kw() {
		$kwsix = esc_attr( get_option( 'meta_six_header' ) );
		echo '<input type="text" name="meta_six_header" value="'.$kwsix.'" placeholder="keyword" />';
	}
	function meta_seven_header_kw() {
		$kwseven = esc_attr( get_option( 'meta_seven_header' ) );
		echo '<input type="text" name="meta_seven_header" value="'.$kwseven.'" placeholder="keyword" />';
	}
	function meta_eight_header_kw() {
		$kweight = esc_attr( get_option( 'meta_eight_header' ) );
		echo '<input type="text" name="meta_eight_header" value="'.$kweight.'" placeholder="keyword" />';
	}

	function pam_contact_section() {
		echo 'Activate and Deactivate the Built-in Contact Form';
	}
	function pam_activate_contact() {
		$options = get_option( 'activate_contact' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="activate_contact" name="activate_contact" value="1" '.$checked.' /></label>';
	}
	//Template submenu functions
	function easy_theme_core_create_page() {
		require_once( get_template_directory() . '/templates/settings-admin.php' );
	}

