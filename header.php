<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>
        <?php wp_title('|',true,'right'); ?>
        <?php bloginfo('name'); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--共通CSS-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--ヘッダーナビゲーション-->
<header class="header">
  <div class="header__inner">
    <div class="logo"></div>
    <buttom class="drawer__button" id="func3">
      <span></span>
      <span></span>
      <span></span>
    </buttom>
    <nav class="drawer__nav">
      <div class="drawer__nav__inner">
        <ul class="drawer__nav__menu">
          <li class="drawer__nav__item">
            <a class="drawer__nav__link" href="<?php echo esc_url( get_category_link(get_cat_ID('news')) ); ?>">ニュース</a>
          </li>
          <li class="drawer__nav__item">
            <a class="drawer__nav__link" href="<?php echo esc_url( get_category_link(get_cat_ID('picture')) ); ?>">動物図鑑</a>
          </li>
          <li class="drawer__nav__item">
            <a class="drawer__nav__link" href="<?php echo esc_url( get_category_link(get_cat_ID('place')) ); ?>">おすすめスポット</a>
          </li>
          <li class="drawer__nav__item">
            <!--検索フォーム-->
            <form method="get" id="searchform" action="<?php echo esc_url(home_url()); ?>">
              <input type="text" name="s" id="s" placeholder="キーワードで検索する">
              <button type="submit">
                <img src="<?php echo esc_url(get_theme_file_uri('search.png')); ?>" alt="">
              </button>
            </form>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>

<!--サイトタイトル-->
<a class="homeurl1" href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <h1 class="title1">動物紹介サイト</h1>
</a>

<p class="subtitle1">私が撮った動物の写真を紹介</p>