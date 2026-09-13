<footer class="l-footer">
        <section class="l-footer-instagram l-section">
            <h2 class="l-footer-instagram__title">INSTAGRAM</h2>
            <div class="l-footer-instagram__grid">
                <a href="#" onclick="event.preventDefault();" class="l-footer-instagram__post">
                    <img src="<?php echo esc_url(get_theme_file_uri('/img/pic-instagram-post.jpg')) ?>" alt="投稿1">
                </a>
                <a href="#" onclick="event.preventDefault();" class="l-footer-instagram__post">
                    <img src="<?php echo esc_url(get_theme_file_uri('/img/pic-instagram-post02.jpg')) ?>" alt="投稿2">
                </a>
                <a href="#" onclick="event.preventDefault();" class="l-footer-instagram__post">
                    <img src="<?php echo esc_url(get_theme_file_uri('/img/pic-instagram-post03.jpg')) ?>" alt="投稿3">
                </a>
                <a href="#" onclick="event.preventDefault();" class="l-footer-instagram__post">
                    <img src="<?php echo esc_url(get_theme_file_uri('/img/pic-instagram-post04.jpg')) ?>" alt="投稿4">
                </a>
                <a href="#" onclick="event.preventDefault();" class="l-footer-instagram__post">
                    <img src="<?php echo esc_url(get_theme_file_uri('/img/pic-instagram-post05.jpg')) ?>" alt="投稿5">
                </a>
                <a href="#" onclick="event.preventDefault();" class="l-footer-instagram__post">
                    <img src="<?php echo esc_url(get_theme_file_uri('/img/pic-instagram-post06.jpg')) ?>" alt="投稿6">
                </a>
            </div>
            <a href="#" onclick="event.preventDefault();" class="l-footer-instagram__btn c-btn">INSTAGRAM</a>
        </section>
        <div class="l-footer-main">
            <div class="l-inner">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="l-footer-main__logo"><img src="<?php echo esc_url(get_theme_file_uri('/img/logo-white.svg')) ?>" alt="SUPPLE"></a>

                <?php 
                $args = array(
                    'post_type' => 'shoplist',
                    'posts_per_page' => -1,
                );
                $the_query = new WP_Query($args);
                ?>
                
                <?php if($the_query -> have_posts()) : ?>
                    <ul class="l-footer-main__shoplist">
                        <?php while($the_query -> have_posts()) : $the_query -> the_post(); ?>
                            <li class="l-footer-main__item">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>

                <address class="l-footer-main__address">
                    株式会社SUPPLE<br>
                    〒123-4567 東京都渋谷区ABC
                </address>
            </div>
        </div>
        <small class="l-footer__copy">
            &copy; 2021 SUPPLE
        </small>
    </footer>
<?php wp_footer(); ?>
</body>
</html>