<?php get_header();	?>

		<div class="index-post">
			<div class="sub-index-post">
				<?php  if ( have_posts()) : ?>
					<?php while (have_posts()): the_post(); ?>
						<article class="post">
								<h3>
									<?php the_title(); ?>
								</h3>
								<?php the_content(); ?>
						</article>
					<?php endwhile; ?>
				<?php else : ?>
					<?php echo wpautop('post error'); ?>
				<?php endif; ?>
		</div>
	</div>




<?php get_footer();
