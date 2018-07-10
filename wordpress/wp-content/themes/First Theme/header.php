<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/WP/wordpress/wp-content/themes/First%20Theme/style.css">
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

	<div class="container">

	<!-- Site Header -->
	<header class="site-header">
		<h1><a href="<?php echo home_url(); ?>"> <?php bloginfo('name'); ?></a></h1>
		<h5><?php bloginfo('description') ?></h5>
	</header>	<!-- Site Header -->
	

	