<?php get_header(); ?>

<div id="container" class="grid">
  <main>
    <?php if (have_posts()): ?>
      <?php if (!$_GET['s']) { ?>
        <p>検索キーワードが未入力です<p>

      <?php } else { ?>
        <h1 class="page-title">
          「<?php echo esc_html($_GET['s']); ?>」の検索結果：<?php echo $wp_query->found_posts; ?>件
        </h1>

        <?php while(have_posts()):the_post(); ?>
          <?php
            $cat = get_the_category();
            $catname = $cat[0]->cat_name;
          ?>
          <article>
            <h2 class="article-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <ul class="meta">
              <li><?php the_time('Y/m/d'); ?></li>
              <li><?php echo $catname; ?></li>
            </ul>
            <div class="readmore"><a href="<?php the_permalink(); ?>">READ MORE</a></div>
          </article>
        <?php endwhile; ?>

        <?php
          if (function_exists("pagination")) {
            pagination($wp_query->max_num_pages);
          }
        ?>
      <?php } ?>
    <?php else: ?>
      <p>検索されたキーワードに一致する記事はありませんでした</p>

    <?php endif; ?>
  </main>
  
</div>

<?php get_footer(); ?>