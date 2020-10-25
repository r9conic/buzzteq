<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page">
		<header id="masthead" class="site-header">
			<div class="title-header">
				<h1 class="site-title"> <?php the_custom_logo(); bloginfo('name'); ?></h1>
				<nav class="header-nav">
						<?php
								$args = array(
								'theme_location' => 'primary'
								);
								wp_nav_menu($args);
						?>
				</nav>
				</div>
		</header>
	</div>
<br>
