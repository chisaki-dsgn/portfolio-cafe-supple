<?php get_header(); ?>
    <main class="p-archive-blog">
        <div class="p-archive-blog__hero page-hero">
            <h1 class="p-archive-blog__title page-title">BLOG & NEWS</h1>
        </div>
        <div class="l-section">
            <div class="l-inner">

            <?php if(have_posts()) : ?>
                <ul class="p-archive-blog__list">
                <?php while(have_posts()) : the_post(); ?>
                    <li class="p-archive-blog__list-item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="p-archive-blog__list-img"><?php the_post_thumbnail('medium'); ?></div>
                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="p-archive-blog__list-date"><?php echo get_the_date('Y/m/d'); ?></time>
                            <h2 class="p-archive-blog__list-title"><?php the_title(); ?></h2>
                        </a>
                    </li>
                <?php endwhile; ?>
                </ul>
                <?php 
                the_posts_pagination(array(
                    'mid_size' => 1,
                    'prev_text' => '<<',
                    'next_text' => '>>',

                ));
                ?>
            <?php endif; ?>

                <!-- <div class="p-archive-blog__pagination">
                    <a href="#" onclick="event.preventDefault();" class="p-archive-blog__pagination-btn"><</a>
                    <a href="#" onclick="event.preventDefault();" class="p-archive-blog__pagination-btn">1</a>
                    <a href="#" onclick="event.preventDefault();" class="p-archive-blog__pagination-btn">2</a>
                    <a href="#" onclick="event.preventDefault();" class="p-archive-blog__pagination-btn">10</a>
                    <div href="#" onclick="event.preventDefault();">…</div>
                    <a href="#" onclick="event.preventDefault();" class="p-archive-blog__pagination-btn">></a>
                </div> -->
            </div>
        </div>
    </main>
    <?php get_footer(); ?>