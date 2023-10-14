<?php get_header(); ?>
<main>
  <section class="p-news l-section">
    <div class="p-news__inner l-inner">
      <h2 class="p-news__heading c-heading">お知らせ一覧</h2>
      <div class="p-news__body">
        <?php if (have_posts()) : ?>
          <ul class="p-news__list">
            <?php while (have_posts()) : the_post(); ?>
              <li class="p-news__item p-news-item">
                <a class="p-news-item__link" href="<?php the_permalink(); ?>">
                  <div class="p-news-item__heading">
                    <span class="p-news-item__date"><?php echo get_the_date('Y.m.d'); ?></span>
                    <span class="p-news-item__category c-label">
                      <?php
                      $categories = get_the_category();
                      echo $categories[0]->name;
                      ?>
                    </span>
                  </div>
                  <div class="p-news-item__title"><?php echo get_the_title(); ?></div>
                </a>
              </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
        <?php endif; ?>
      </div>
      <?php
      $args = [
        'mid_size' => 1,
        'prev_text' => '',
        'next_text' => '',
        'screen_reader_text' => 'ページャー'
      ];
      the_posts_pagination($args);
      ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>