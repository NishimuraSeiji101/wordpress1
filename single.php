<!--投稿ページのカテゴリーに応じて、表示する投稿ページを切り替える-->
<?php
    $post = $wp_query->post;
    if ( in_category('bird') ) {
        include(TEMPLATEPATH.'/single-bird.php');
    } elseif ( in_category('fish') ) {
        include(TEMPLATEPATH.'/single-fish.php');
    } elseif ( in_category('news') ) {
        include(TEMPLATEPATH.'/single-news.php');
    } elseif ( in_category('place') ) {
        include(TEMPLATEPATH.'/single-place.php');
    } else {
        include(TEMPLATEPATH.'/single-default.php');
    }
?>