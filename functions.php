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
        get_theme_file_uri('/css/style.css'),
        array('google-fonts'),
        filemtime(get_theme_file_path('/css/style.scs'))
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

add_action('wp_enqueue_scripts','my_theme_enqueue_scripts');