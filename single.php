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


                <!-- <div class="p-single-blog__post-img">
                    <img src="" alt="コーヒーを抽出する写真">
                </div>
                <time datetime="2021-01-01" class="p-single-blog__post-date">2021/01/01</time>
                <h1 class="p-single-blog__post-title">豆の産地ごとに変わる「ベストな抽出温度」</h1>
                <div class="p-single-blog__post-body">
                    <p class="p-single-blog__paragraph">「いつも同じようにお湯を沸かして淹れているけれど、豆によって味が変わらない」とお悩みではありませんか？ 実は、コーヒー豆の産地や標高、焙煎度合いによって「最適なお湯の温度」は異なります。少しの温度設定の違いで、カップの中の風味は驚くほど劇的に変化します。</p>
                    <p class="p-single-blog__paragraph">エチオピアやケニアなど、アフリカ産の高標高で育った浅煎り豆は「91〜93℃の高め」がベストです。高温で抽出することで、フレーバーの核である華やかなお花のようなアロマや、柑橘系のジューシーな酸味成分をしっかりとお湯に溶かすことができ、本来の鮮烈な個性が引き立ちます。</p>
                    <p class="p-single-blog__paragraph">一方で、ブラジルやマンデリンなどのナッツ感や重厚なコクがある中深煎り〜深煎りの豆は「85〜88℃の低め」に設定するのがポイントです。低温でじっくりと淹れることで、刺さるような角のある苦味を抑え、甘みを含んだまろやかな口当たりと滑らかなトーストのようなコクを抽出できます。</p>
                    <p class="p-single-blog__paragraph">ご自宅でドリップする際は、ぜひ温度計を使ってお湯の温度を測ってみてください。豆の個性に合わせた温度調整を行うだけで、まるでプロが淹れたかのようなクリアで奥行きのある味わいを楽しめます。自分の好みに合わせた「ベスト温度」を探すのも、コーヒーの醍醐味の一つです。</p>
                </div> -->

                <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="p-single-blog__btn c-btn">一覧へ戻る</a>
            </div>
        </div>
    </main>
    <?php get_footer(); ?>