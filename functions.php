<?php 
function mytheme_enqueue_scripts(){
    wp_enqueue_style(
        'reset-css',
        get_theme_file_uri('/css/reset.css'),
        array(),
        filemtime(get_theme_file_path('/css/reset.css'))
    );

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&display=swap',
        array('reset-css'),
        null
    );

    wp_enqueue_style(
        'my-theme-style',
        get_theme_file_uri('/style.css'),
        array('google-fonts'),
        filemtime(get_theme_file_path('/style.css')),
    );

    wp_enqueue_style(
        'my-custom-style',
        get_theme_file_uri('/css/style.css'),
        array('my-theme-style'),
        filemtime(get_theme_file_path('/css/style.css'))
    );

    wp_enqueue_script(
        'my-thme-script',
        get_theme_file_uri('/js/main.js'),
        array(),
        filemtime(get_theme_file_path('/js/main.js')),
        array(
            'in_footer' => true,
            'strategy' => 'defer',
        )
    );
}
add_action('wp_enqueue_scripts','mytheme_enqueue_scripts');


function my_theme_setup(){
    add_theme_support('title-tag');

    register_nav_menus(array(
        'global-menu' => 'グローバルナビゲーション',
        'footer-menu' => 'フッターメニュー'
    ));
}
add_action('after_setup_theme', 'my_theme_setup');