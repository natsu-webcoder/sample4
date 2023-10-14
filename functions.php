<?php

//css, js読み込み
function my_enqueue_scripts()
{
  $uri = esc_url(get_template_directory_uri());
  wp_enqueue_script('jquery');
  wp_enqueue_script('bundle_js', $uri . '/js/script.js');
  wp_enqueue_style('my_styles', $uri . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');


//titleタグ
function display_title()
{
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'display_title');

function change_title_separator($sep)
{
  $sep = ' | ';
  return $sep;
}
add_filter('document_title_separator', 'change_title_separator');

function remove_tagline($title_parts)
{
  if (is_front_page()) {
    unset($title_parts['tagline']);
  }
  return $title_parts;
}
add_filter('document_title_parts', 'remove_tagline');


// アイキャッチ画像を有効化
function setup_post_thumnails()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_post_thumnails');

function img_uncompressed()
{
  return 100;
}
add_filter('jpeg_quality', 'img_uncompressed');

// 抜粋機能を固定ページに使えるよう設定
add_post_type_support('page', 'excerpt');


// blog一覧ページで表示件数を9件にする
function modify_blog_archive_query($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  if (is_post_type_archive('blog') || is_tax('blog_category')) {
    $query->set('posts_per_page', 9);
  }
}

add_action('pre_get_posts', 'modify_blog_archive_query');
