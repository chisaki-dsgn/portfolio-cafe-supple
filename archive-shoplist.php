<?php get_header(); ?>
    <main class="p-shoplist">
        <div class="p-shoplist__hero page-hero">
            <h1 class="p-shoplist__title page-title">SHOPLIST</h1>
        </div>
        <div class="l-section">

        <?php if(have_posts()) : ?>
            <ul class="p-shoplist__list l-inner-wide">
                <?php while(have_posts()) : the_post(); ?>
                <li class="p-shoplist__list-item">
                    <a href="<?php the_permalink(); ?>" class="p-shoplist__card">
                        <div class="p-shoplist__list-img">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                        <div class="p-shoplist__list-body">
                            <h2 class="p-shoplist__list-title"><?php the_title(); ?></h2>
                            <p class="p-shoplist__list-address"><?php echo esc_html(get_field('shoplist-address')); ?></p>
                            <p class="p-shoplist__list-tel"><?php the_field('shoplist-tel'); ?></p>
                            <p class="p-shoplist__list-open">営業時間 / <time datetime="<?php echo esc_attr(get_field('shoplist-open')); ?>"><?php echo esc_html(get_field('shoplist-open')); ?></time>~<time datetime="<?php echo esc_attr(get_field('shoplist-close')); ?>"><?php echo esc_html(get_field('shoplist-close')); ?></time></p>
                            <p class="p-shoplist__list-sheets">座席 / <?php echo esc_html(get_field('shoplist-capacity')); ?></p>
                            <p class="p-shoplist__list-smoking">喫煙 / <?php echo get_field('shoplist-smoking') ? '可' : '不可' ; ?></p>
                        </div>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </div>
    </main>
    <?php get_footer(); ?>