<?php get_header(); ?>

<!--記事一覧ページはじまり-->

<!-- カテゴリー絞り込みのボタン -->
<?php if(in_category('picture')): ?>
    <h1 class="title1">ギャラリー</h1>    
    <div class="search-list">
        <button class="search-list__item js-category-label is-active" data-category="">すべて</button>
        <button class="search-list__item js-category-label" data-category="bird">鳥</button>
        <button class="search-list__item js-category-label" data-category="fish">魚</button>
    </div>
<?php endif; ?>
<!-- カテゴリー絞り込みのボタンここまで -->

<?php if(in_category('news')): ?>
    <h1 class="title1">ニュース記事 一覧</h1>
<?php endif; ?>

<?php if(in_category('place')): ?>
    <h1 class="title1">動物が見れるオススメスポット</h1>
<?php endif; ?>

<?php if(in_category('camera')): ?>
    <h1 class="title1">上手に動物の写真を撮る方法</h1>
<?php endif; ?>

<!--取得したカテゴリー名をdata-categoryとして名前を付ける-->
<div class="grid" id="contents">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php
        $cat = get_the_category();
        $cat = $cat[0];
    ?>
    <!--動物図鑑（category:picture）は表示-->
    <?php if(in_category('picture')): ?>
        <article <?php post_class('grid-item'); ?> data-category = <?php echo $cat->cat_name ?> id="contents2">
            <a href="<?php the_permalink(); ?>">
                <h1><?php the_title(); ?></h1>
            </a>
            <?php the_post_thumbnail('medium'); ?>
        </article>
    <?php endif; ?>

    <!--ニュースのカテゴリーが押されたら（category:news）表示-->
    <?php if(in_category('news')): ?>
        <article <?php post_class('grid-item2'); ?> data-category = <?php echo $cat->cat_name ?> >
            <a href="<?php the_permalink(); ?>">
                <h1><?php the_title(); ?></h1>
            </a>
            <?php the_excerpt(); ?>
        </article>
    <?php endif; ?>

    <!--見れる場所のカテゴリーが押されたら（category:plade）表示-->
    <?php if(in_category('place')): ?>
        <article <?php post_class('grid-item'); ?> data-category = <?php echo $cat->cat_name ?> >
            <a href="<?php the_permalink(); ?>">
                <h1><?php the_title(); ?></h1>
            </a>    
        <?php the_post_thumbnail('medium'); ?>
        </article>
    <?php endif; ?>

    <!--撮影方法のカテゴリーが押されたら（category:camera）表示-->
    <?php if(in_category('camera')): ?>
        <article <?php post_class('grid-item'); ?> data-category = <?php echo $cat->cat_name ?> >
            <a href="<?php the_permalink(); ?>">
                <h1><?php the_title(); ?></h1>
                <?php the_post_thumbnail('medium'); ?>
            </a>
        </article>
    <?php endif; ?>

<?php endwhile; endif; ?>
</div>    
<!--記事一覧ページおわり-->

<?php get_footer(); ?>