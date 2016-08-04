
<!-- looks for a file called header.php -->
<?php get_header(); ?>

	<main><!-- call this MAIN eventually instead of content -->
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
			<h3><?php the_title(); ?></h3>
			<div class='thumbnail-img'>
				<?php the_post_thumbnail('thumbnail');//size ?>
			</div>			
			<h4>Posted on <?php the_time('F jS, Y') ?></h4>			
			<p><?php the_content(__('(more...)')); ?></p>			
			<hr> 
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	
	</main><!-- end content / MAIN -->


<?php //the_content();  ?>

<?php get_footer(); ?>

