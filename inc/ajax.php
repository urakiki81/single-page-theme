<?php
/*
	
@package easy theme
	
	========================
		AJAX FUNCTIONS
	========================
*/
add_action( 'wp_ajax_nopriv_easy_load_more', 'easy_load_more' );
add_action( 'wp_ajax_easy_load_more', 'easy_load_more' );

add_action('wp_ajax_nopriv_easy_save_user_contact_form', 'easy_save_contact');
add_action('wp_ajax_easy_save_user_contact_form', 'easy_save_contact');
function easy_load_more() {
	
	$paged = $_POST["page"]+1;
	$prev = $_POST["prev"];
	
	if( $prev == 1 && $_POST["page"] != 1 ){
		$paged = $_POST["page"]-1;
	}
	
	$query = new WP_Query( array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'paged' => $paged
	) );
	
	if( $query->have_posts() ):
		
		echo '<div class="page-limit" data-page="/page/' . $paged . '">';
				
		while( $query->have_posts() ): $query->the_post();
		
			get_template_part( 'template-parts/content', get_post_format() );
		
		endwhile;
		
		echo '</div>';
		
	else:
	
		echo 0;
		
	endif;
	
	wp_reset_postdata();
	
	die();
	
}
function easy_check_paged( $num = null ){
	
	$output = '';
	
	if( is_paged() ){ $output = 'page/' . get_query_var( 'paged' ); }
	
	if( $num == 1 ){
		$paged = ( get_query_var( 'paged' ) == 0 ? 1 : get_query_var( 'paged' ) );
		return $paged;
	} else {
		return $output;
	}
	
}
function easy_save_contact()
{
    $title = wp_strip_all_tags($_POST['name']);
    $email = wp_strip_all_tags($_POST['email']);
    $message = wp_strip_all_tags($_POST['message']);
    $args = array(
        'post_title' => $title,
        'post_content' => $message,
        'post_author' => 1,
        'post_status' => 'publish',
        'post_type' => 'easy-contact',
        'meta_input' => array(
            '_contact_email_value_key' => $email,
        ),
    );
    $postID = wp_insert_post($args);
    if ($postID !== 0) {
		$to = get_bloginfo('admin_email');
        $subject = 'easy Contact Form - '.$title;
        $headers[] = 'From: '.get_bloginfo('name').' <'.$to.'>'; // 'From: Alex <me@alecaddd.com>'
        $headers[] = 'Reply-To: '.$title.' <'.$email.'>';
        $headers[] = 'Content-Type: text/html: charset=UTF-8';
        wp_mail($to, $subject, $message, $headers);
    }
    echo $postID;
    die();
}