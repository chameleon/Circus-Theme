
<?php get_header(); ?>
	
	<div class='row'>
		<div class='col-xs-12 col-sm-8'>
			<main>
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
					<h3><?php the_title(); ?></h3>
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
		</div>
		<div class='col-xs-12 col-sm-4'>
			<?php get_sidebar(); ?>
		</div>
	</div>

<div class='clearBoth'></div>
<?php get_footer(); ?>
</div><!-- End site-wrapper  -->
