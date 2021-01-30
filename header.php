<?php 
	
	/*
		This is the template for the hedaer
		
		@package Smooth Scroll theme
	*/
	
?>
<?php 
$kwone = esc_attr( get_option( 'meta_one_header' ) );
$kwtwo = esc_attr( get_option( 'meta_two_header' ) );
$kwthree = esc_attr( get_option( 'meta_three_header' ) );
$kwfour = esc_attr( get_option( 'meta_four_header' ) );
$kwfive = esc_attr( get_option( 'meta_five_header' ) );
$kwsix = esc_attr( get_option( 'meta_six_header' ) );
$kwseven = esc_attr( get_option( 'meta_seven_header' ) );
$kweight = esc_attr( get_option( 'meta_eight_header' ) );
$bingapi = esc_attr( get_option( 'bing_aip_key' ) );
$googleapi = esc_attr( get_option( 'google_aip_key' ) );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo( 'name' ); wp_title(); ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<meta name="keywords" content="<?php print $kwone; ?>,<?php print $kwtwo; ?>,<?php print $kwthree; ?>,<?php print $kwfour; ?>,<?php print $kwfive; ?>,<?php print $kwsix; ?>,<?php print $kwseven; ?>,<?php print $kweight; ?>">

		<meta name="msvalidate.01" content="<?php print $bingv; ?>">
		<meta name="google-site-verification" content="<?php print $gv; ?>">
		<?php wp_head(); ?>
		
	</head>
<body <?php body_class(); ?>>