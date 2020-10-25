<?php

get_header();	?>

		<div class="index-main">
			<div class="container">
				<br>
				<?php  if ( have_posts()) : while (have_posts()): the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'post'); ?>

					<?php endwhile; ?>

						<?php get_template_part( 'template-parts/content', 'none'); ?>

				<?php endif; ?>
				<br>
			</div>
	</div>

	<div class="sidebar">
		<div class="block">
			<?php get_sidebar ?>
			testtt
		</div>
	</div>




<?php get_footer(); ?>
