<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<title><? echo get_option('blogname'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="msapplication-TileColor" content="#ffc40d">
		<meta name="theme-color" content="#ffffff">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<a href="/"><img src="<?php echo get_template_directory_uri(). '/assets/img/logo.png'; ?>" alt="logo" class="logo"></a>
			<?php wp_nav_menu(array('theme_location' => 'main')); ?>
			<!-- burger nav -->		
			<?php wp_nav_menu(array('theme_location' => 'side')); ?>
		</header>