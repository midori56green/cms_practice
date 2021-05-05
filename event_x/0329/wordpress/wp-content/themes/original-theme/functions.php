<?php

add_action('after_setup_theme', 'setup');
function setup() {
	// read title
	add_theme_support('title-tag');

	// add custom logo
	add_theme_support('custom-logo');

	// active to menu
	register_nav_menus(array(
		'main_nav' => 'main navigation'
	));

	// add social icons widgets
	register_sidebar(array(
		'name' => 'Social media',
		'id' => 'social_icons'
	));

	// add sponsor icons widgets
	register_sidebar(array(
		'name' => 'Sponsor',
		'id' => 'sponsor_icons'
	));
}

// add style & script
add_action('wp_enqueue_scripts', 'enqueue_scripts');
function enqueue_scripts() {
	wp_enqueue_style('style', get_template_directory_uri().'/style.css',);
	wp_enqueue_script('script', get_template_directory_uri().'/script.js',);
}

//permit upload svg
add_action('upload_mimes', 'upload_file_type');
function upload_file_type($file_type) {
	$new_file_type = array(
		'svg' => 'image/svg+xml'
	);
	$file_type = array_merge($file_type, $new_file_type);

	return $file_type;
}

// add original pattern
add_action('admin_init', function () {
  //1 パラメータの設定
  $pattern = [
    "title" => "my-button",
    "categories" => ["original"],
    "descripiton" => "",
    "content" => '<!-- wp:button --><div><!-- wp:button {"className":"main-btn"} --><a class="main-btn">test button</a><!-- /wp:button --></div>',
  ];

  //2 ブロックパターンの登録
  register_block_pattern($pattern["title"], $pattern);

  //3 カテゴリーの登録
  register_block_pattern_category('original', ['label' => 'オリジナル']);
});

// add_action('admin_init', 'original_pattern');
// function original_pattern() {
// 	$code = '<!-- wp:button {"className":"main-btn"} --><div><a class="main-btn" href="#">Original button</a></div><!-- wp:button -->';

// 	$pattern = array(
// 		"title" => "main-btn",
// 		"categories" => ["Original", "Buttons"],
// 		"description" => "Main button style",
// 		"content" => $code
// 	);

// 	register_block_pattern($pattern['title'], $pattern);
// 	register_block_pattern('Original', ['label' => 'Original']);
// }


// assignment color
add_theme_support('editor-color-palette', array(
	array(
		'name' => 'red',
		'slug' => 'red',
		'color' => '#ec3172'
	),
	array(
		'name' => 'blue',
		'slug' => 'blue',
		'color' => '#7731ec'
	),
	array(
		'name' => 'green',
		'slug' => 'green',
		'color' => '#3cec31'
	),
	array(
		'name' => 'yellow',
		'slug' => 'yellow',
		'color' => '#ece931'
	),
	array(
		'name' => 'gray',
		'slug' => 'gray',
		'color' => '#8e8e8e'
	),
));