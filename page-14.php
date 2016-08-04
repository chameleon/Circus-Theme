<!-- This TEMPLATE page_about - page name starts with page_  which is a dedicated wp  prefix before the slug name / substitute for index.php.  WordPress looks for page_ templates before other php files.-->


<?php get_header(); ?>
<main>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
			<h3><?php the_title(); ?> --- This is the page-14.php template for this page ID-14 only.</h3>
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

