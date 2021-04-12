<?php

add_action('after_setup_theme', 'webbu_setup');
function webbu_setup() {
	// titleタグ
	add_theme_support('title-tag');

	// 管理画面：メニューの設定　外観＞メニュー
	register_nav_menus(array(
		'mainnav' => 'メインナビゲーション'
		// 任意のキー名 => 管理画面から登録したメニュー名
	));

	// 管理画面：記事の詳細編集　外観＞ウィジェット
	register_sidebar(array(
		'name' => '大会実績ヘッダー',
		'id' => 'convention_header'
	));
}

// style.cssの読み込み
add_action('wp_enqueue_scripts', 'webbu_enqueue_scripts');	// enqueue: 追加～f的な意味
function webbu_enqueue_scripts() {
	wp_enqueue_style('web-bu', get_stylesheet_directory_uri().'/style.css');	// この行を増やすとその分読み込むcssが増える
	// ↑の'web-bu'の名前は適当なやつでよい
}

// 管理画面：投稿＞編集
// 色指定を指定できる
add_theme_support('editor-color-palette',array(
	array(
		'name' => '青',
		'slug' => 'blue',
		'color' => '#5075ab'
	)
));
