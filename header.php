<!doctype html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>WordPress Theme From Scratch</title>

		<!-- wp_head grabs functions??? -->
		<? wp_head(); ?>
	</head>

			<!-- Set styles in the body tag for homepage vs other pages. -->
			<?php 
			if( is_front_page() ):  // or ... is_home .... where True if BLOG view homepage. 
				$myBodyClass = array('frontBG', 'frontTextColor');
			else:
				$myBodyClass = array('notFrontBG', 'notFrontTextColor');
			endif;
			?>

	<body  <?php body_class( $myBodyClass );  //could be array here instead of var ?>>
	<main>
		<?php //wp_nav_menu(); /*grabs the first menu it finds */ ?>
		<?php wp_nav_menu(array('theme_location'=>'primary')); /* same name as in functions.php */ ?>


		<h1>My Site Title</h1>

		<img src="<?php header_image(); ?>"




