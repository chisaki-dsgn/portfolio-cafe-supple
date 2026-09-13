<?php get_header(); ?>

<main class="p-single-shoplist">
    <div class="p-single-shoplist__hero page-hero">
        <div class="p-single-shoplist__title page-title">SHOPLIST</div>
    </div>
    <div class="l-inner-wide">
        <div class="l-section">
            <div class="p-single-shoplist__flex">
                <div class="p-single-shoplist__img">
                    <?php the_post_thumbnail('full'); ?>
                </div>
                <div class="p-single-shoplist__body">
                    <h1 class="p-single-shoplist__title"><?php the_title(); ?></h1>
                    <p class="p-single-shoplist__address"><?php echo esc_html(get_field('shoplist-address')); ?></p>
                    <p class="p-single-shoplist__tel">TEL.<?php echo esc_html(get_field('shoplist-tel')); ?></p>
                    <dl class="p-single-shoplist__info">
                        <dt>営業時間 /</dt>
                        <dd><time datetime="<?php echo esc_attr(get_field('shoplist-open')); ?>"><?php echo esc_html(get_field('shoplist-open')); ?></time> - <time datetime="<?php echo esc_attr(get_field('shoplist-close')); ?>"><?php echo esc_html(get_field('shoplist-close')); ?></time></dd>
                        <dt>座席 /</dt>
                        <dd><?php echo esc_html(get_field('shoplist-capacity')); ?>席</dd>
                        <dt>喫煙 /</dt>
                        <dd><?php echo get_field('shoplist-smoking') ? '可' : '不可' ; ?></dd>
                        <dt>アクセス /</dt>
                        <dd><?php echo esc_html(get_field('shoplist-access')); ?></dd>
                    </dl>
                </div>
            </div>
            <?php 
            if(get_field('shoplist-address')):
                $encoded_address = urlencode(get_field('shoplist-address'));
            ?>
            <div class="p-single-shoplist__map">
                <iframe 
                src="https://maps.google.com/maps?q=<? echo esc_attr($encoded_address); ?>&output=embed&t=m&z=15" 
                title="店舗の所在地マップ"
                width="100%"
                height="100%"
                loading="lazy"
                allowfullscreen>
                </iframe>
            </div>
            <?php endif; ?>
            <a href="<?php echo esc_url(get_post_type_archive_link('shoplist')) ;?>" class="p-single-shoplist__btn c-btn">BACK</a>
        </div>
    </div>
</main>
