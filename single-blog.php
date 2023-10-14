<?php get_header(); ?>
<main>
  <section class="p-blog-single">
    <div class="p-blog-single__inner l-inner">
      <div class="p-blog-single__heading-wrapper">
        <div class="p-blog-single__category-wrapper">
          <span class="p-blog-single__category c-label2">
            <?php
            $terms = get_the_terms(get_the_ID(), 'blog_category');
            echo $terms[0]->name;
            ?>
          </span>
        </div>
        <h2 class="p-blog-single__heading c-heading"><?php echo get_the_title(); ?></h2>
      </div>
      <div class="p-blog-single__body">
        <div class="p-blog-single__thumbnail">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('', ['class' => 'p-blog-single__thumbnail-img']); ?>
          <?php else : ?>
            <img class="p-blog-single__thumbnail-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/no-image.jpg">
          <?php endif; ?>
        </div>
        <div class="p-blog-single__content wordpress-content">
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
            <a class="p-paginavi__center-link" href="<?php echo esc_url(home_url()); ?>/blog">目のお話一覧</a>
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
    </div>
  </section>
</main>
<?php get_footer(); ?>