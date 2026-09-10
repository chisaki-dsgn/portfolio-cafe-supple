<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header class="l-header">
        <?php if(is_front_page() || is_home()) : ?>
            <h1 class="l-header__logo">
                <a href="<?php echo esc_url(home_url('/')) ?>"><img src="<?php echo esc_url(get_theme_file_uri('/img/logo.svg')) ?>" alt="SUPPLE"></a>
            </h1>
        <?php else : ?>
            <div class="l-header__logo">
                <a href="<?php echo esc_url(home_url('/')) ?>"><img src="<?php echo esc_url(get_theme_file_uri('/img/logo.svg')) ?>" alt="SUPPLE"></a>
            </div>
        <? endif; ?>
        <nav class="l-header__nav js-header-nav">
            <?php 
            wp_nav_menu( array(
                'theme_location' => 'global-menu',
                'container' => false,
                'menu_class' => 'l-header__list',
            ));
            ?>
        </nav>
        <a href="#" onclick="event.preventDefault();" class="l-header__btn">ONLINE SHOP</a>
    </header>