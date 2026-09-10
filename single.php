<?php get_header(); ?>
    <main class="p-single-blog">
        <div class="p-archive-blog__hero page-hero">
            <div class="p-archive-blog__title page-title">BLOG & NEWS</div>
        </div>
        <div class="l-section">
            <div class="l-inner">

            <?php if(have_posts()) : while(have_posts()) : ?>
            <?php the_post(); ?>

                <div class="p-single-blog__post-img">
                    <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('large'); ?>
                    <?php endif; ?>
                </div>
                
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="p-single-blog__post-date"><?php echo get_the_date('Y/m/d'); ?></time>
                <h1 class="p-single-blog__post-title"><?php the_title(); ?></h1>
                <div class="p-single-blog__post-body">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>
            <?php endif; ?>

                <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="p-single-blog__btn c-btn">一覧へ戻る</a>
            </div>
        </div>
    </main>
    <?php get_footer(); ?>