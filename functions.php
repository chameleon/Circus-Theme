<?php
/* Use this functions.php to activate features and include css, js, fonts, etc */
function scratch_script_enqueue(){
	wp_enqueue_style( 'myStyle', get_template_directory_uri() .'/css/scratch.css', array(), '1.0.0', 'all' );

	wp_enqueue_script( 'myScript', get_template_directory_uri() . '/js/scratch.js', array(), '1.0.0', true );  //true means this script WILL be written in the FOOTER
	
}
add_action( 'wp_enqueue_scripts', 'scratch_script_enqueue' );



function scratch_theme_setup(){
	add_theme_support( 'menus');

	register_nav_menu( 'primary', 'Primary Heaver Nav' );
	/*  Look on header.php for placeholder  */

	register_nav_menu( 'secondary', 'Footer Nav' );
}
add_action( 'init', 'scratch_theme_setup');

?>