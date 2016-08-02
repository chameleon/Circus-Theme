<!-- This TEMPLATE page_about - page name starts with page_  which is a dedicated wp  prefix before the slug name / substitute for index.php.  WordPress looks for page_ templates before other php files.-->


<?php 
	/*  
		Template Name: Page No Title
		The file name prefix page- makes this a template but the comment
		Template Name makes this selectable in the Admin Panel.
	*/

	get_header(); ?>

	<div id="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
			
			
			<!--<h4>Posted on <?php the_time('F jS, Y') ?></h4>-->
			
			<p><?php the_content(__('(more...)')); ?></p>
			
			<hr> 
		<?php endwhile; else: ?>
		
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

		<?php endif; ?>
	</div>


		<?php //the_content();  ?>

<?php get_footer(); ?>

