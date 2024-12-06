<?php get_header(); ?>

<a href="<?php echo get_month_link($year, $month); ?>"><?php echo get_the_date('Y年m月'); ?></a>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <a href="<?php the_permalink(); ?>">
        <h1><?php the_title(); ?></h1>
    </a>
<?php endwhile; endif; ?>

<a class="footer-button" href="" onclick="history.back()" return false;>戻る</a>

<?php get_footer(); ?>