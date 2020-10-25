<?get_header();?>

<div class="index-post">
		<?php  if ( have_posts()) : while (have_posts()): the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'post'); ?>

			<?php endwhile; else : ?>

				<?php get_template_part( 'template-parts/content', 'none'); ?>

		<?php endif; ?>
</div>

<?


get_sidebar();
get_footer();
