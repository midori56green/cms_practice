<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
	<?php wp_body_open(); ?>
	<header id="header" class="first-view-cnt">
 		<a href="www.ticketmaster.com" target="_blank" rel="noopener" class="floating-btn">BUY&ensp;TICKET</a>
		<h1 class="logo">
			<span class="logo-back-wrap">
				<span class="logo-back"></span>
			</span>
			<span class="logo-back-wrap">
				<span class="logo-back"></span>
			</span>
			<span class="logo-back-wrap">
				<span class="logo-back"></span>
			</span>
			<?php the_custom_logo(); ?>
			<?php if(!has_custom_logo()): ?>
				<span class="logo-text"><?php bloginfo('name'); ?></span>
			<?php endif; ?>
		</h1>
		<strong class="first-view-infomation">19&ensp;October&ensp;2021</strong>
		<a href="#" id="scroll-btn">
			<img src="../img/material/arrow-bottom_white.png" id="scroll-btn-img" alt="scroll bottom">
		</a>
	</header>
	<div id="wrapper">
		<main id="main">
			<section class="section fade-section">
				<h2 class="section-title">About EventX</h2>
				<p>Event x is a brand new music event that is to be held in different locations with different artists.<br>Let's enjoy a new style music festival together!</p>
				<a href="www.ticketmaster.com" target="_blank" rel="noopener" class="main-btn">
					<img src="../img/material/arrow-bottom-left_yellow.png" class="main-btn-arrow" alt="">
					<span class="btn_sub-text">Now on sale</span>
					<strong class="btn_main-text">BUY TICKET</strong>
				</a>
			</section>
			<section class="section fade-section">
				<h2 class="section-title">Artists</h2>
				<div class="artist-cnt">
					<img src="../img/material/artists.png" alt="">
				</div>
			</section>
			<section class="section fade-section">
				<h2 class="section-title">News</h2>
				<ul class="news-cnt">
					<?php
						// show news
						if(have_posts()):

						// show 3 latest news
	 					while($wp_query -> have_posts()):
						$wp_query -> the_post();
					?>
					<li class="news-cnt_li">
						<dl class="news-box">
							<dt class="news-cnt_title-box">
								<span class="news-cnt_title"><?php the_title(); ?></span>
								<span class="news-cnt_date">
									<?php the_time(get_option('date_format')); ?>
								</span>
							</dt>
							<dd class="news-cnt_text">
								<?php the_excerpt(); ?>
							</dd>
						</dl>
						<a href="#" class="news-cnt_btn">
							<span class="news-cnt_btn-text">READ&ensp;MORE</span>
						</a>
					</li>
					<?php
						endwhile;
						$posts_num = wp_count_posts() -> publish;
						$show_max = 3;

						// show past news
						if($posts_num > $show_max):
					?>
					<li>
						<ul id="past-news-box">
							<?php
								$args = array(
									'showposts' => $posts_num,
									'offset' => $show_max
								);
								$wp_query = new WP_Query($args);

								while($wp_query -> have_posts()):
								$wp_query -> the_post();
							?>
							<li class="news-cnt_li">
								<dl class="news-box">
									<dt class="news-cnt_title-box">
										<span class="news-cnt_title">Ticket infomation</span>
										<span class="news-cnt_date">19 April 2021</span>
									</dt>
									<dd class="news-cnt_text">EventX's ticket sales started!</dd>
								</dl>
								<a href="#" class="news-cnt_btn">
									<span class="news-cnt_btn-text">READ&ensp;MORE</span>
								</a>
							</li>
							<?php endwhile; ?>
						</ul>
						<a href="#" id="news-cnt_toggle-btn">
							<span class="close-text">Show&ensp;more</span>
							<span class="show-text">Close</span>
							<img class="news-cnt_toggle-btn_icon" src="../img/material/arrow-bottom_yellow.png" alt="">
						</a>
					</li>
					<?php
						// show past news
						endif;

						// show news
						endif;
					?>
				</ul>
			</section>
		</main>
		<aside id="aside">
			<?php if(is_active_sidebar('sponsor_icons')): ?>
			<section class="aside-section fade-section">
				<h3 class="aside-section_title">Sponsors</h3>
				<ul class="aside-section_ul">
					<?php dynamic_sidebar('sponsor_icons') ?>
				</ul>
			</section>
			<?php endif; ?>
		</aside>
		<div id="fade-cnt">
			<div id="overlay"></div>
			<div id="morenews-cnt">
				<div class="morenews-cnt_inner">
					<h3 id="morenews-cnt_title">News title</h3>
					<p id="morenews-cnt_date">19 October 2021</p>
					<p id="morenews-cnt_text">new is coming soon ...</p>
				</div>
				<a href="#" id="morenews-cnt_close-btn" title="close news"></a>
			</div>
		</div>
	</div>
	<section id="footer-section" class="fade-section">
		<h2 class="footer-title">Save the date</h2>
		<dl class="infomation-cnt">
			<?php $page = get_post(55); ?>
			<?php echo $page -> post_content; ?>
			<div class="infomation-cnt_box">
				<dt class="infomation-cnt_title"><img src="../img/material/time-icon_white.png" alt="date&time"></dt>
				<dd class="infomation-cnt_text">19 October 2021 18:00~</dd>
			</div>
			<div class="infomation-cnt_box">
				<dt class="infomation-cnt_title"><img src="../img/material/pin-icon_white.png" alt="place"></dt>
				<dd class="infomation-cnt_text">Aichi Sky Expo</dd>
			</div>
		</dl>
		<div id="countdown-box">
			<span id="day" class="countdown-box_num">0</span>
			<span class="countdown-box_unit">D</span>
			<span id="hour" class="countdown-box_num">0</span>
			<span class="countdown-box_unit">H</span>
			<span id="minutes" class="countdown-box_num">0</span>
			<span class="countdown-box_unit">M</span>
			<span id="second" class="countdown-box_num">0</span>
			<span class="countdown-box_unit">S</span>
		</div>
	</section>
	<footer id="footer">
			<section class="footer-cnt">
				<?php if(is_active_sidebar('social_icons')): ?>
				<h3 class="footer-cnt-title">Contact</h3>
				<ul class="sns-cnt">
					<?php dynamic_sidebar('social_icons'); ?>
				</ul>
				<?php endif; ?>
				<a href="#" class="footer-cnt-btn">
					<img class="footer-cnt-btn_icon" src="../img/material/e-mail_white.png" alt="">
					<span class="footer-cnt-btn_text">Subscribe to newsletter</span>
				</a>
			</section>
		<p class="copyright"><small>&copy;&ensp;2021&ensp;<?php the_title(); ?></small></p>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>