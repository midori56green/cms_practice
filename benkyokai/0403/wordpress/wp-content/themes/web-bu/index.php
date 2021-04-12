<!-- ⇓header.php の読み込み -->
<?php get_header(); ?>


<!-- ⇓index.php か singular.php を使っているかの確認 -->
index.phpです

<div class="page_menu inner clearfix">
	<!-- ⇓サイトのタイトル -->
	<h1><?php wp_title(''); ?></h1>
		<!-- ⇓カテゴリの取得 -->
        <ul class="convention_header">
        	<?php
        		if(is_active_sidebar('convention_header')):
	        	dynamic_sidebar('convention_header');
	        	endif;
        	?>
        </ul>
    </div>
    <div class="page_content">
        <div class="inner">
        	<?php if(have_posts()): ?>
            <dl class="post_list">
	        	<?php
					// ⇓の if: は if(){} の書き方と同じ
				    // 処理の中にhtmlはさむときはこっちの方が見やすいかも
					while(have_posts()):
					the_post();
				?>
                <dt class="post_date"><?php echo get_the_date(); ?></dt>
                <dd class="post_info">
                    <h3 class="post_infoTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="post_infoCat">カテゴリ：<?php the_category('/'); ?></div>
                </dd>
	            <?php endwhile; ?>
            </dl>
            <?php endif; ?>

            <!-- 記事の件数表示 -->
            <span>
            	<?php
            		$current_page = get_query_var('paged');
            		$current_page = $current_page == 0 ? '1' : $current_page;

            		$max_pages = $wp_query -> max_num_pages;
            		echo $current_page. '/' .$max_pages;
            	?>
            </span>

            <?php echo $wp_query -> max_num_page; ?>

            <!-- ⇓記事一覧の移動 -->
            <?php if($wp_query -> max_num_pages > 1): ?>
            <ul class="post_pager">
                <li class="post_pager_back">
                	<?php next_posts_link('前へ'); ?>
                </li>
                <li class="post_pager_back">
                	<?php previous_posts_link('次へ'); ?>
                </li>
            </ul>
        	<?php endif; ?>
        </div>
    </div>
</div>

<!-- footer.php の読み込み -->
<?php get_footer(); ?>
