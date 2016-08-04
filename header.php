<!doctype html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>WordPress Theme From Scratch</title>
		<meta name="description" content="A website.">
		<meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1.0; user-scalable=0;">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link rel= "icon" media="all" type="image/vnd.microsoft.icon" href="favicon.ico" />

		
		 <!-- wp_head grabs functions??? -->
		<? wp_head(); ?>
	</head>

			<!-- Set styles in the body tag for homepage vs other pages. -->
			<?php 
			// if( is_front_page() ):  // or ... is_home .... where True if BLOG view homepage. 
			// 	$myBodyClass = array('frontBG', 'frontTextColor');
			// else:
			// 	$myBodyClass = array('notFrontBG', 'notFrontTextColor');
			// endif;
			?>

	<body  <?php //body_class( $myBodyClass );  //could be array here instead of var ?>>
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

			<div id='social_bar'>
	        	<a title='My Stack Overflow' href='http://stackoverflow.com/users/6592015/joe-ux?tab=profile' target='_blank'>
	                <i class="zmdi zmdi-stack-overflow"></i>
	            </a> 
	            <a title='My LinkedIn' href='https://www.linkedin.com/in/joeuxdesigner' target='_blank'>
	                <i class="zmdi zmdi-linkedin-box"></i>
	            </a>
	            <a title='My Twitter' href='https://twitter.com/CarrboroJoe' target='_blank'>
	                <i class="zmdi zmdi-twitter-box"></i>
	            </a>           
	            <a title='My GitHub' href='https://github.com/chameleon' target='_blank'>
	                <i class="zmdi zmdi-github-box"></i>
	            </a>           
	        </div>
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
					      <a class="navbar-brand" href="#">Circus</a>
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

		

		




