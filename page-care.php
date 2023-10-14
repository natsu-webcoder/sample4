<?php get_header(); ?>
<main>
  <section class="p-care l-section">
    <div class="p-care__inner l-inner">
      <h2 class="p-care__heading c-heading">診療内容について</h2>
      <div class="p-care__body">
        <?php
        $parent_id = get_page_by_path('care')->ID;
        $args = [
          'post_type' => 'page',
          'posts_per_page' => -1,
          'post_parent' => $parent_id,
          'orderby' => 'menu_order',
          'order' => 'ASC'
        ];
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <ul class="p-care__list">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <li class="p-care__item p-care-item">
                <div class="p-care-item__img-wrapper">
                  <?php the_post_thumbnail('', ['class' => 'p-care-item__img']); ?>
                </div>
                <div class="p-care-item__title"><?php echo get_the_title(); ?></div>
                <div class="p-care-item__desc"><?php echo get_the_excerpt(); ?></div>
                <div class="p-care-item__more">
                  <a class="c-more" href="<?php the_permalink(); ?>">詳しく見る</a>
                </div>
              </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
        <?php endif; ?>
      </div>
  </section>
</main>
<?php get_footer(); ?>