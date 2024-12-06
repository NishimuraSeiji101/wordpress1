<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php if(in_category('bird')): ?>
        <div class="grid single1" id="contents">
            <h1><?php the_title(); ?></h1>
            <?php the_post_thumbnail('medium'); ?>
            <?php the_content(); ?>
        </div>
    <?php endif; ?>
<?php endwhile; endif; ?>

<a class="footer-button" href="" onclick="history.back()" return false;>戻る</a>

<?php get_footer(); ?>