<?php

/*アイキャッチ画像設定*/
function setup_theme() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_theme');

//テーマフォルダ内のJS、style.css読み込み
add_action( 'wp_enqueue_scripts', function(){
    // 画像読み込みが終わった後、footer読み込み後にjsファイルを読み込み、出力することでタイルレイアウトにできます（in_footer => trueを追記）
    wp_enqueue_script( 'jquery-3.7.1.min.js', get_template_directory_uri() . '/jquery-3.7.1.min.js' , array(), false, array('strategy' => 'defer', 'in_footer' => true));
    wp_enqueue_script( 'masonry.pkgd.min.js', get_template_directory_uri() . '/masonry.pkgd.min.js' , array(), false, array('strategy' => 'defer', 'in_footer' => true));
    wp_enqueue_script( 'imagesloaded.pkgd.js', get_template_directory_uri() . '/imagesloaded.pkgd.js' , array(), false, array('strategy' => 'defer', 'in_footer' => true));
    wp_enqueue_script( 'slick.min.js', get_template_directory_uri() . '/slick.min.js' , array(), false, array('strategy' => 'defer', 'in_footer' => true));        
    wp_enqueue_script( 'script.js', get_template_directory_uri() . '/script.js' , array(), false, array('strategy' => 'defer', 'in_footer' => true));        
  } );

function my_theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/slick.css');
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/slick-theme.css');
}
  
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

//メニュー追加
add_theme_support('menus');

register_nav_menus([
  'global_nav' => 'グローバルナビ',
  'hamburger_nav' => 'ハンバーガーナビ',
  'footer_nav' => 'フッターナビ',
]);

/*検索追加*/
function search_filter($query) {
    if ($query -> is_search) {
      $query -> set('post_type', 'post');
    }
    return $query;
  }
add_filter('pre_get_posts', 'search_filter');