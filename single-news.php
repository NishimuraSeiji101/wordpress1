<?php get_header(); ?>

<!--タイトル-->
<h1 class="title1">ニュース</h1>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php if(in_category('news')): ?>
        <div class="grid single2" id="contents">
            <a href="<?php the_permalink(); ?>">
                <h1><?php the_title(); ?></h1>
            </a>
            <?php the_post_thumbnail('medium'); ?>
            <?php the_content(); ?>
        </div>
    <?php endif; ?>    
<?php endwhile; endif; ?>

<a class="footer-button" href="" onclick="history.back()" return false;>戻る</a>

<?php get_footer(); ?>