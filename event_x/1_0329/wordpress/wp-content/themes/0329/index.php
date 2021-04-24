<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
	<?php wp_body_open(); ?>
	<h1><?php wp_title(); ?></h1>
	<?php the_content(); ?>
	<?php wp_footer(); ?>
</body>
<script src="script.js"></script>
</html>