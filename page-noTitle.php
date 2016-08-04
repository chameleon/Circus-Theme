<!-- This TEMPLATE page_about - page name starts with page_  which is a dedicated wp  prefix before the slug name / substitute for index.php.  WordPress looks for page_ templates before other php files.-->


<?php 
	/*  
		Template Name: Page No Title
		The file name prefix page- makes this a template but the comment
		Template Name makes this selectable in the Admin Panel.
	*/

	get_header(); ?>
<main>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
			<h3>No Title Template</h3>
			<div class='content'>
				<div class='thumbnail-img'>
					<?php the_post_thumbnail('thumbnail');//size ?>
				</div>			
				<h4>Posted on <?php the_time('F jS, Y') ?></h4>			
				<p><?php the_content(__('(more...)')); ?></p>			
				<hr> 
			</div>
		<?php endwhile; else: ?>
			<div class='content'>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			</div>
		<?php endif; ?>
	
	</main>
		<?php //the_content();  ?>

<?php get_footer(); ?>

