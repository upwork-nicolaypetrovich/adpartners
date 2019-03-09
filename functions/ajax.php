<?php
/**
 * @package webdesignsuntheme
 */


// download form ajax
add_action('wp_ajax_download_form', 'download_form_ajax_callback');
add_action('wp_ajax_nopriv_download_form', 'download_form_ajax_callback');

function download_form_ajax_callback() {

    $data = [];
    parse_str($_POST['data'], $data);

    // saving data
    $title = '[Download Form] '.$data['email'];
    
    $post_id = wp_insert_post([
        'post_title'    => $title,
        'post_status'   => 'publish',
        'post_type'     => 'form'
    ]);
    add_post_meta($post_id, 'email_f', $data['email']);

    //print_r($data); wp_die();

    echo get_theme_mod('d-link');

    wp_die();

}


// booking form ajax
add_action('wp_ajax_booking_form', 'booking_form_ajax_callback');
add_action('wp_ajax_nopriv_booking_form', 'booking_form_ajax_callback');

function booking_form_ajax_callback() {

    $data = [];
    parse_str($_POST['data'], $data);

    //print_r($data); wp_die();

    // saving data
    $title = '[Contact Form] ';
    if ( isset($data['first-name']) ) $title .= $data['first-name'] . ' ';
    if ( isset($data['last-name']) ) $title .= $data['last-name'] . ' ';
    if ( isset($data['email']) ) $title .= $data['email'];
    
    $post_id = wp_insert_post([
        'post_title'    => $title,
        'post_status'   => 'publish',
        'post_type'     => 'form'
    ]);
    if ( isset($data['first-name']) )  add_post_meta($post_id, '1st_name_f', $data['first-name']);
    if ( isset($data['last-name']) )  add_post_meta($post_id, '2nd_name_f', $data['last-name']);
    if ( isset($data['email']) )  add_post_meta($post_id, 'email_f', $data['email']);
    if ( isset($data['phone']) )  add_post_meta($post_id, 'phone_f', $data['phone']);
    if ( isset($data['comments']) )  add_post_meta($post_id, 'text_f', $data['comments']);

    // sending email
    $message = '';
    if ( isset( $data['first-name'] ) ) $message .= 'First name: ' . $data['first-name'] . "\n\r";
    if ( isset( $data['last-name'] ) ) $message .= 'Last name: ' . $data['last-name'] . "\n\r";
    if ( isset( $data['email'] ) ) $message .= 'Email: ' . $data['email'] . "\n\r";
    if ( isset( $data['phone'] ) ) $message .= 'Phone: ' . $data['phone'] . "\n\r";
    if ( isset( $data['comments'] ) ) $message .= 'Comments: ' . $data['comments'] . "\n\r";
    
    $headers = 'From: From website booking form <adpartners@email.com>' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

    return wp_mail( get_option( 'admin_email' ), 'From website booking form', $message, $headers );
    wp_die();

}


// featured pop-up ajax
add_action('wp_ajax_featured', 'featured_ajax_callback');
add_action('wp_ajax_nopriv_featured', 'featured_ajax_callback');

function featured_ajax_callback() {

    // print_r($_POST['id']); wp_die();

    $posts = new WP_Query( array(
        'post_type' => 'real_est',
        'posts_per_page' => 1,
        'p' => $_POST['id']
    ) );

    while ( $posts->have_posts() ) : $posts->the_post();
        get_template_part( 'template-blocks/page', 'details' );
    endwhile;

    wp_die();

}