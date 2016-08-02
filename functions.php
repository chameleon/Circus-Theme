<?php
/* Use this functions.php to activate features and include css, js, fonts, etc */
function scratch_script_enqueue(){
	wp_enqueue_style( 'myStyle', get_template_directory_uri() .'/css/scratch.css', array(), '1.0.0', 'all' );

	wp_enqueue_script( 'myScript', get_template_directory_uri() . '/js/scratch.js', array(), '1.0.0', true );  //true means this script WILL be written in the FOOTER
	
}
add_action( 'wp_enqueue_scripts', 'scratch_script_enqueue' );

//Add ROBOTO font  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
function wpb_add_google_fonts() {
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,300,500,700', false );
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

/*
function add_circus_font() {
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,300,500,700', false );
}
add_action( 'wp_enqueue_scripts', 'add_circus_font' );
*/



function scratch_theme_setup(){
	add_theme_support( 'menus');

	register_nav_menu( 'primary', 'Primary Heaver Nav' );
	/*  Look on header.php for placeholder  */

	register_nav_menu( 'secondary', 'Footer Nav' );
}
add_action( 'init', 'scratch_theme_setup');

?>