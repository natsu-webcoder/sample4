<?php get_header(); ?>
<main>
  <section class="p-news-single l-section">
    <div class="p-news-single__inner l-inner">
      <div class="p-news-single__heading-wrapper">
        <div class="p-news-single__date"><?php echo get_the_date('Y.m.d'); ?></div>
        <h2 class="p-news-single__heading c-heading"><?php echo get_the_title(); ?></h2>
        <div class="p-news-single__category-wrapper">
          <span class="p-news-single__category c-label">
            <?php
            $categories = get_the_category();
            echo $categories[0]->name;
            ?>
          </span>
        </div>
      </div>
      <div class="p-news-single__body wordpress-content">
        <?php the_content(); ?>
      </div>
      <div class="p-paginavi">
        <?php $next_post = get_next_post();
        if ($next_post) :
        ?>
          <div class="p-paginavi__prev">
            <a class="c-more c-more--reverse" href="<?php echo get_permalink($next_post->ID); ?>">前へ</a>
          </div>
        <?php endif; ?>
        <div class="p-paginavi__center">
          <a class="p-paginavi__center-link" href="<?php echo esc_url(home_url()); ?>/news">お知らせ一覧</a>
        </div>
        <?php $prev_post = get_previous_post();
        if ($prev_post) :
        ?>
          <div class="p-paginavi__next">
            <a class="c-more" href="<?php echo get_permalink($prev_post->ID); ?>">次へ</a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>