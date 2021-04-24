    <footer id="footer">
        <div class="inner clearfix">
            <div id="logo"><?php bloginfo('name'); ?></div>
            <div id="footer_navi">
                <?php
                	wp_nav_menu(array(
                		'theme_location' => 'mainnav',
                		'container_id'=> 'footer-navi'
                	));
                ?>
            </div>
        </div>
        <div id="copyright">
            <p><small>&copy; <?php bloginfo('name'); ?></small></p>
        </div>
    </footer>
	<?php wp_footer(); ?>
</body>
</html>