<?php get_header(); ?>

<main class="p-single-shoplist">
    <div class="p-single-shoplist__hero page-hero">
            <div class="p-single-shoplist__title page-title">SHOPLIST</div>
    </div>
    <div class="l-inner-wide">
        <div class="l-section">
            <div class="p-single-shoplist__flex">
                <div class="p-single-shoplist__img">
                    <img src="<?php echo esc_url(get_theme_file_uri('/img/pic-shoplist-kitasenju.jpg')); ?>" alt="">
                </div>
                <div class="p-single-shoplist__body">
                    <h1 class="p-single-shoplist__title">北千住店</h1>
                    <p class="p-single-shoplist__address">〒123-4567 東京都渋谷区abc</p>
                    <p class="p-single-shoplist__tel">TEL.03-0000-0000</p>
                    <dl class="p-single-shoplist__info">
                        <dt>営業時間 /</dt>
                        <dd>11:00 ~ 23:00</dd>
                        <dt>座席 /</dt>
                        <dd>30席</dd>
                        <dt>喫煙 /</dt>
                        <dd>可</dd>
                        <dt>アクセス /</dt>
                        <dd>北千住駅から徒歩5分</dd>
                    </dl>
                </div>
            </div>
            <div class="p-single-shoplist__map">
                <iframe src="" frameborder="0">
                    
                </iframe>
            </div>
            <a href="<?php echo esc_url(get_post_type_archive_link('shoplist')) ;?>" class="p-single-shoplist__btn c-btn">BACK</a>
        </div>
    </div>
</main>
