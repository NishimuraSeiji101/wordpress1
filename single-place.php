<?php get_header(); ?>

<!--タイトル-->
<h1 class="title1">おすすめスポット</h1>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="grid single2" id="contents">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>    
<?php endwhile; endif; ?>

<?php get_footer(); ?>