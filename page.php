<?php get_header(); ?>
<main>
  <section class="p-care-single l-section">
    <div class="p-care-single__inner l-inner">
      <h2 class="p-care-single__heading c-heading"><?php echo the_title(); ?>について</h2>
      <div class="p-care-single__body wordpress-content">
        <?php echo the_content(); ?>
      </div>
  </section>
  <section class="p-other-cares">
    <div class="p-other-cares__inner l-inner">
      <h2 class="p-other-cares__heading c-heading">上記以外の診療内容</h2>
      <div class="p-other-cares__body">
        <div class="p-care-list">
          <?php
          $parent_id = get_page_by_path('care')->ID;
          $args = [
            'post_type' => 'page',
            'posts_per_page' => -1,
            'post_parent' => $parent_id,
            'post__not_in' => [get_the_ID()],
            'orderby' => 'menu_order',
            'order' => 'ASC'
          ];
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : ?>
            <ul class="p-care-list__list">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="p-care-list__item p-care-list-item">
                  <a class="p-care-list-item__link" href="<?php the_permalink(); ?>">
                    <div class="p-care-list-item__img-wrapper">
                      <?php the_post_thumbnail('', ['class' => 'p-care-list-item__img']); ?>
                    </div>
                    <div class="p-care-list-item__title"><?php echo get_the_title(); ?></div>
                  </a>
                </li>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>
      <div class="p-other-cares__more">
        <a class="c-more" href="<?php echo esc_url(home_url()); ?>/care">診療内容一覧</a>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>