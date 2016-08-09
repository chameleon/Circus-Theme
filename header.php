<!doctype html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>WordPress Theme From Scratch</title>
		<meta name="description" content="A website.">
		<meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1.0; user-scalable=0;">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link rel= "icon" media="all" type="image/vnd.microsoft.icon" href="favicon.ico" />

		<? wp_head(); ?>
	</head>

			<!-- Set styles in the body tag for homepage vs other pages. -->
			<?php   //No use for this at the moment but good to have available.
			// if( is_front_page() ):  // or ... is_home .... where True if BLOG view homepage. 
			// 	$myBodyClass = array('frontBG', 'frontTextColor');
			// else:
			// 	$myBodyClass = array('notFrontBG', 'notFrontTextColor');
			// endif;
			?>

	<body  <?php //body_class( $myBodyClass );  //could be array here instead of var ?>>
	<div id='site-wrapper'>
	
		<div class="bg2"></div>
    	<div class="bg"></div>
	
		<div id='title-box-bg'>
			<header><h1>~Joe UX Designer~</h1></header>
			<div id='title-box'>
				<div id='monkeyDiv'><!-- change monkey to BG img for ifinite zoom-in -->
					<img  id='monkey' src="<?php header_image(); ?>" alt='juggling sock monkey picture'>
					<!-- <img id='monkey' src="images/UXmonkeyMask400.png" alt='juggling sock monkey picture'> -->
				</div>
				<div id='tagline'>
	    			<h1>~Joe UX Designer~</h1>
					<blockquote>
					<?php 
						/* Grabs the Tagline value that user entered via plugin. */
						$options = get_option( 'sit_settings' );
						echo $options['sit_textarea_field_11'];
						//echo get_option('hello_world_data'); 
					?>
				</blockquote>
				</div>
			</div>		
		</div>



		<div id='social_bar'>
			<!-- 
			This needs to be refactored and put in an include()!
			Currently:  
			1) get indexes from table where user has entered a value.
			2) Put those indexes in an array
			3) Loop through that array and use each value as
			an index when searching  the className:URL hash array to grab both values.
			My values:
			http://stackoverflow.com/users/6592015/joe-ux?tab=profile
			https://www.linkedin.com/in/joeuxdesigner
			https://twitter.com/CarrboroJoe
			https://github.com/chameleon
			-->
			<?php

			//For now: these items must be in the same order as in the WP plugin.
			$userSocialIcons = array(
			    "facebook-box",
			    "twitter-box",
			    "linkedin-box",
			    "google-plus-box",
			    "pinterest-box",
			    "stack-overflow",
			    "github-box"
			);


			$userIconList = array();

			$options = get_option( 'sit_settings' );
			 	$optionsKeys = array_keys($options);			

			$i = 0;
			foreach ($options as $key => $value){
				if ($options[$key]){  // if its not empty
					$userIconList[$i] = $value;  //add the index num and url to a new array
				}
				$i++;
			}
			$i = 0;


			$iconKeys = array_keys($userSocialIcons);

			foreach ($userIconList as $fieldNum => $url){  
			?>
	      		<a href="<?php echo $url; ?>" target="_blank">
	      			<i class="zmdi zmdi-<?php echo $userSocialIcons[$fieldNum]; ?>"></i>
	      		</a>
			<?php
		    }
		    ?>
           
        </div>
		
		<div class='container containerMenuOverride'>
			<div class='row'>
				<div class='col-xs-12'>

					<nav class="navbar navbar-default">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      
					      	<!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/images/flag.png"> -->
					     	<img src="<?php echo get_template_directory_uri(); ?>/images/flag.png" />
					    </div>

					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						    <?php //wp_nav_menu(); /*grabs the first menu it finds */ ?>
							<?php 
								wp_nav_menu(array(
									'theme_location'=>'primary', 
									//'container'=>false,
									'menu_class' => 'nav navbar-nav navbar-right'
								)); 
								/* primary- same name as in functions.php */ 
							?>
						</div>

					  </div><!-- /.container-fluid -->
					</nav>
					

				</div>
			</div>
		</div>

		

		




