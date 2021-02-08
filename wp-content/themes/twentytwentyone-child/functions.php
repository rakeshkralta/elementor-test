<?php

add_action( 'wp_enqueue_scripts', 'elementor_test_scripts' );
function elementor_test_scripts() 
{  
	wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/assets/bootstrap-4.5.3/css/bootstrap.min.css', false);
	wp_enqueue_style('fontawesome-css', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false);
	wp_enqueue_style('responsive-css', get_stylesheet_directory_uri() . '/assets/css/style.css', false);
	wp_enqueue_script('bootstrap-js',  get_stylesheet_directory_uri() . '/assets/bootstrap-4.5.3/js/bootstrap.min.js', false);
}
?>
