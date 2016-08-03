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
	<!-- <div class='container'> -->
		<div class="bg2"></div>
    	<div class="bg"></div>
	
		<div id='title-box-bg'>
			<header><h1>~Joe UX Designer~</h1></header>
			<div id='title-box'>
				<div id='monkeyDiv'><!-- change monkey to BG img -->
					<img  id='monkey' src="<?php header_image(); ?>" alt='juggling sock monkey picture'>
					<!-- <img id='monkey' src="images/UXmonkeyMask400.png" alt='juggling sock monkey picture'> -->
				</div>
				<div id='tagline'>
	    			<h1>~Joe UX Designer~</h1>
					<blockquote>Juggling stakeholder concerns while balancing form and function on the tightrope toward timely deliverables.</blockquote>
				</div>
			</div>
		</div>
		

		<?php //wp_nav_menu(); /*grabs the first menu it finds */ ?>
		<?php wp_nav_menu(array('theme_location'=>'primary')); /* same name as in functions.php */ ?>

		

		




