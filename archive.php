get_header();	?>

		<div class="index-main">
			<div class="container">
				<br>
				<?php  if ( have_posts()) : ?>
					<?php while (have_posts()): the_post(); ?>
						<article class="post">
								<h4>
									<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h4>

							Archive Test



	</div>




<?php get_footer(); ?>
