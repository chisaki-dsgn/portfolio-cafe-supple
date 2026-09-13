<?php get_header(); ?>
    <main class="p-top">
        <div class="p-top-kv">
            <picture>
                <source media="(min-width:768px)" srcset="<?php echo esc_url(get_theme_file_uri('/img/bg-top-kv.jpg')) ?>">
                <img src="<?php echo esc_url(get_theme_file_uri('/img/bg-top-kv-sp.jpg')) ?>" alt="カフェ店内の様子" width="720" height="1000">
            </picture>
        </div>
        <section class="p-top-concept l-section">
            <h2>CONCEPT</h2>
            <div class="l-inner">
                <div class="p-top-concept__img">
                    <img src="<?php echo esc_url(get_theme_file_uri('/img/concept-kv-sp.jpg')) ?>" alt="挽きたてコーヒーの画像">
                </div>
                <h3 class="p-top-concept__catch">一杯一杯まごころをこめて調製し、新鮮な香りと豊かな 風味のコーヒーを提供します。</h3>
                <p class="p-top-concept__text">世界中の産地からこだわり抜いて買い付けた厳選豆を、<br class="pc-only">毎日最適な状態で焙煎しています。<br class="pc-only">忙しい毎日にそっと寄り添う、心地よい時間と極上の味わいをお届けします。</p>
            </div>
            <a href="<?php echo esc_url(home_url('/concept/')) ?>" class="p-top-concept__btn c-btn">MORE</a>
        </section>
        <section class="p-top-menu l-section">
            <h2 class="p-top-menu__title">MENU</h2>
            <div class="p-top-menu__flex l-inner">
                <div class="p-top-menu__drip">
                    <h3 class="p-top-menu__list-title">DRIP</h3>
                    <dl class="p-top-menu__list">
                        <div class="p-top-menu__item">
                            <dt>エントランスブレンド</dt>
                            <dd>¥800</dd>
                        </div>
                        <div class="p-top-menu__item">
                            <dt>エチオピアウォッシュド</dt>
                            <dd>¥800</dd>
                        </div>
                        <div class="p-top-menu__item">
                            <dt>エチオピアナチュラル</dt>
                            <dd>¥800</dd>
                        </div>
                        <div class="p-top-menu__item">
                            <dt>グアテマラ</dt>
                            <dd>¥800</dd>
                        </div>
                        <div class="p-top-menu__item">
                            <dt>ブラジル</dt>
                            <dd>¥800</dd>
                        </div>
                        <div class="p-top-menu__item">
                            <dt>タンザニア</dt>
                            <dd>¥800</dd>
                        </div>
                        <div class="p-top-menu__item">
                            <dt>フスクブレンド</dt>
                            <dd>¥800</dd>
                        </div>
                    </dl>
                </div>
                <div class="p-top-menu__espresso">
                    <h3 class="p-top-menu__list-title">ESPRESSO</h3>
                    <dl class="p-top-menu__list">
                        <div class="p-top-menu__item">
                            <dt>エントランスブレンド</dt>
                            <dd>¥800</dd>
                        </div>
                        <div class="p-top-menu__item">
                            <dt>エチオピアウォッシュド</dt>
                            <dd>¥800</dd>
                        </div>
                        <div class="p-top-menu__item">
                            <dt>エチオピアナチュラル</dt>
                            <dd>¥800</dd>
                        </div>
                        <div class="p-top-menu__item">
                            <dt>グアテマラ</dt>
                            <dd>¥800</dd>
                        </div>
                        <div class="p-top-menu__item">
                            <dt>ブラジル</dt>
                            <dd>¥800</dd>
                        </div>
                        <div class="p-top-menu__item">
                            <dt>タンザニア</dt>
                            <dd>¥800</dd>
                        </div>
                        <div class="p-top-menu__item">
                            <dt>フスクブレンド</dt>
                            <dd>¥800</dd>
                        </div>
                    </dl>
                </div>
            </div>
            <a href="<?php echo esc_url(home_url('/menu/')) ?>" class="p-top-menu__btn c-btn">MORE</a>
        </section>
        <section class="p-top-shoplist l-section">
            <h2 class="p-top-shoplist__title">SHOP LIST</h2>
            <div class="l-inner">
                <p class="p-top-shoplist__text">首都圏を中心に6店舗展開しています。<br>お近くの店舗でお待ちしています。</p>

                <?php 
                $args = array(
                    'post_type' => 'shoplist',
                    'posts_per_page' => -1
                );
                $posts = get_posts($args);

                if(! empty($posts)) : ?>
                <ul class="p-top-shoplist__list">
                <?php 
                foreach($posts as $post) : setup_postdata($post); ?>
                    <li class="p-top-shoplist__item">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php 
                endforeach; ?>
                </ul>
                <?php 
                wp_reset_postdata(); 
                endif; 
                ?>
                
                <a href="<?php echo esc_url(home_url('/shoplist/')) ?>" class="p-top-shoplist__btn c-btn">MORE</a>
            </div>
        </section>
        <div class="p-top-separator">
            <picture>
                <source media="(min-width:768px)" srcset="<?php echo esc_url(get_theme_file_uri('/img/bg-top-separate.jpg')) ?>">
                <img src="<?php echo esc_url(get_theme_file_uri('/img/bg-top-separate-sp.jpg')) ?>" alt="" width="720" height="340">
            </picture>
        </div>
        <section class="p-top-blog l-section">
            <h2 class="p-top-blog__title">BLOG & NEWS</h2>

            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
            );
            $the_query = new WP_Query($args);
            ?>

            <?php if($the_query->have_posts()) : ?>
            <ul class="p-top-blog__list l-inner">
                <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="p-top-blog__item">
                    <a href="<?php the_permalink(); ?>" class="p-top-blog__card">
                        <div class="p-top-blog__img"><?php the_post_thumbnail(); ?></div>
                        <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="p-top-blog__time"><?php echo get_the_date('Y/m/d'); ?></time>
                        <h3 class="p-top-blog__card-title"><?php the_title(); ?></h3>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php else : ?>
                <P>記事が見つかりませんでした</P>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            <a href="<?php echo esc_url(get_post_type_archive_link('post')) ?>" class="p-top-blog__btn c-btn">MORE</a>
        </section>
    </main>
    <?php get_footer(); ?>