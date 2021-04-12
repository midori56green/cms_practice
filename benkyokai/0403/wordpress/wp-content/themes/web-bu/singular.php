<?php get_header(); ?>
singular.php です
<?php
	// ⇓の if: は if(){} の書き方と同じ
    // 処理の中にhtmlはさむときはこっちの方が見やすいかも
	if(have_posts()):
	while(have_posts()):
	the_post();
?>

<!-- フロントページ（ホームページだったら表示しない -->
<?php if(!is_front_page()): ?>
<div class="page_menu inner clearfix">
    <!-- ⇓記事のタイトル -->
	<h1><?php the_title(); ?></h1>
</div>
<?php endif; ?>

<div class="page_content">
    <div class="inner">
        <?php the_content(); ?>
    </div>
</div>
<?php
	endwhile;
	endif;
?>
<?php get_footer(); ?>