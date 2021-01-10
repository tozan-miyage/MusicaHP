<?php
function add_files()
{
    // WordPress本体のjquery.jsを読み込まない
    // wp_deregister_script('jquery');これを機能させると、jqueryを使うプラグインが使用不可になる（インスタ連携など）

    // google-font
    wp_enqueue_style('google-font', "https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap");

    // bootstrapのcssファイル
    wp_enqueue_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css");

    // swiperのcssファイル
    wp_enqueue_style('swiper', "https://unpkg.com/swiper/swiper-bundle.min.css");

    // オリジナルcssファイル
    wp_enqueue_style('reset.css', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('styles.css', get_template_directory_uri() . '/assets/css/styles.css');

    // bootstrapのjsファイル
    // wp_enqueue_script('jquery');
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery', 'popper'), null, true);

    // swiperのjsファイル
    wp_enqueue_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js');
    wp_enqueue_script('swiper.js', get_template_directory_uri() . '/assets/js/swiper.js');
    // オリジナjsファイル
    wp_enqueue_script('main.js', get_template_directory_uri() . '/assets/js/main.js');
}

add_action('wp_enqueue_scripts', 'add_files');
