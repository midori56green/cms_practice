<!DOCTYPE html>
<!-- ⇓Wordpressの管理画面で設定した言語を読み込む -->
<html <?php language_attributes(); ?>>
<head>
	<!-- ⇓文字コード（エンコード）の設定 -->
	<meta charset="<?php bloginfo('cahset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- title>ホーム</title -->
	<!-- phpでタイトルを出力するので内容が可変的なタグは消す -->
 	<?php wp_head(); ?>
</head>
<body>
	<?php wp_body_open(); ?>
    <header id="header">
        <div class="inner clearfix">
            <div id="logo_web"<?php if(is_front_page()): ?> class="is-large"<?php endif; ?>>
                <!-- ⇓管理画面で設定したサイト名を反映 -->
                <h1><?php bloginfo('name'); ?></h1>
            </div>
        </div>
        <nav id="navi">
            <?php
	        	// ⇓グローバルナビを読み込み
                wp_nav_menu(array(
                    'theme_location' => 'mainnav',
                    'container' => ''	// 中のコードはWordpressが解釈して出漁するので、無駄なdivを消す
                    // functions.phpで指定したキー名に合わせる
                ));
            ?>
        </nav>
    </header>