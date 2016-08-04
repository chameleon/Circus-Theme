
<?php 
	/*  
		Template Name: Page Info
		Especially for the info page and pulls content from content_info.php
		Nothing Stored in database- the 2 template files do all the work here.
	*/

get_header(); ?>
		
	<main  style='padding: 15px;'>
	<!-- 
	   Content pulled in here from "sub" template called content-info.php 
		COuld have ued one template but wanted to have a content- page also.
	   -->
	   <?php get_template_part( 'content', 'info' ); ?>

	</main>


<?php //the_content();  ?>

<?php get_footer(); ?>