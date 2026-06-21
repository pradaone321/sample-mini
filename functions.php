<?php
//titleタグのサポートを有効化
add_theme_support('title-tag');
//アイキャッチが画像のサポートを有効化
add_theme_support('post-thumbnails');


// style.cssの読み込み
function enqueue_style() {
    wp_enqueue_style('main-style',get_theme_file_uri('/assets/style.css'));
}
add_action('wp_enqueue_scripts','enqueue_style');