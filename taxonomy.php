<?php get_header(); ?>
<main>
  <section class="p-blog l-section--gray">
    <div class="p-blog__inner l-inner">
      <div class="p-category-list">
        <div class="p-category-list__inner">
          <div class="p-category-list__lead">カテゴリで探す</div>
          <ul class="p-category-list__list">
            <li class="p-category-list__item">
              <a class="p-category-list__item-link p-category-list__item-link--all c-label2" href="<?php echo esc_url(home_url()); ?>/blog">すべて</a>
            </li>
            <?php
            $args = [
              'taxonomy' => 'blog_category'
            ];
            $terms = get_terms($args);
            ?>
            <?php foreach ($terms as $term) : ?>
              <li class="p-category-list__item">
                <a class="p-category-list__item-link c-label2 <?php if (is_tax('blog_category', $term->term_id)) echo 'active'; ?>" href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="p-blog__body">
        <div class="p-blog__title c-heading"><?php single_term_title(); ?>の記事</div>
        <?php if (have_posts()) : ?>
          <ul class="p-blog__list">
            <?php while (have_posts()) : the_post(); ?>
              <li class="p-blog__item p-blog-item">
                <a class="p-blog-item__link" href="<?php the_permalink(); ?>">
                  <div class="p-blog-item__img-wrapper">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('', ['class' => 'p-blog-item__img']); ?>
                    <?php else : ?>
                      <img class="p-blog-item__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/no-image.jpg">
                    <?php endif; ?>
                    <span class="p-blog-item__category">
                      <?php
                      $terms = get_the_terms(get_the_ID(), 'blog_category');
                      echo $terms[0]->name;
                      ?>
                    </span>
                  </div>
                  <div class="p-blog-item__text-wrapper">
                    <div class="p-blog-item__title"><?php echo get_the_title(); ?></div>
                    <div class="p-blog-item__text"><?php echo strip_tags(get_the_content()); ?></div>
                  </div>
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