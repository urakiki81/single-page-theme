<?php
function mark_load_css(){
	
    wp_register_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all' );


    
    wp_enqueue_style('main');

}
add_action( 'wp_enqueue_scripts', 'mark_load_css' );

function mark_load_js(){
	
	wp_enqueue_script('jquery');
    wp_enqueue_script( 'easyTheme', get_template_directory_uri() . '/js/customizer-preview.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'boot3','https://cdn.jsdelivr.net/jquery.scrollto/2.1.0/jquery.scrollTo.min.js', array( 'jquery' ),'2.1.0',true );
    wp_enqueue_script( 'pam', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
    wp_register_script( 'ann', get_template_directory_uri() . '/js/animation.js', array('jquery'), '1.0.0', true );
        // all styles
        wp_enqueue_script('ann');
    
    // all scripts
    wp_register_style( 'awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', array(), '4.2.0');
    wp_enqueue_script( 'gsap-js', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.13.2/TweenMax.min.js', array(), false, true );
	wp_register_script('TIMELINE','https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js',array(), false, true );
    wp_register_script('GSAP',"https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js", array(), false, true );
    wp_register_script('SCROLLMJ',"https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.js", array(), false, true );
    //wp_register_script('Animations', get_template_directory_uri() . '/js/animations.js', array(), '1.0.0', true);
    wp_enqueue_style('awesome');
    wp_enqueue_script('GSAP');
	wp_enqueue_script('SCROLLMJ');
	wp_enqueue_script('TIMELINE');
	//wp_enqueue_script('Animations');
}
add_action( 'wp_enqueue_scripts', 'mark_load_js' );