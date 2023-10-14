<?php get_header(); ?>
<main>
  <section class="p-time l-section fade-in-section">
    <div class="p-time__inner">
      <h2 class="p-time__heading c-heading">診療時間</h2>
      <div class="p-time__body">
        <div class="p-time__table-wrapper">
          <table class="p-time__table">
            <tr>
              <th></th>
              <th>月</th>
              <th>火</th>
              <th>水</th>
              <th>木</th>
              <th>金</th>
              <th>土</th>
            </tr>
            <tr>
              <th class="p-time__table-time">9:00-11:30</th>
              <td>●</td>
              <td>×</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
            </tr>
            <tr>
              <th class="p-time__table-time">15:00-17:30</th>
              <td>●</td>
              <td>×</td>
              <td>●</td>
              <td>休診</td>
              <td>●</td>
              <td>休診</td>
            </tr>
          </table>
        </div>
        <div class="p-time__note-wrapper">
          <div class="p-time__note01">※ 初めてコンタクトレンズを使用する方は、装着の練習が必要です。そのため、受付終了の1時間前までに来院してください。</div>
          <div class="p-time__note02">※ 手術や治療は火曜日に実施しています。</div>
          <div class="p-time__note03">※ 診療代の支払いにはクレジットカードが使用可能です。</div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-news l-section l-section--gray fade-in-section">
    <div class="p-news__inner l-inner">
      <h2 class="p-news__heading c-heading">お知らせ</h2>
      <div class="p-news__body">
        <?php
        $args = [
          'post_type' => 'post',
          'posts_per_page' => 3,
        ];
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <ul class="p-news__list">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
      <div class="p-news__more">
        <a class="c-more" href="<?php echo esc_url(home_url()); ?>/news">お知らせ一覧を見る</a>
      </div>
    </div>
  </section>
  <section class="p-top-about l-section fade-in-section">
    <div class="p-top-about__inner l-inner">
      <div class="p-top-about__img-wrapper">
        <img class="p-top-about__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top-about.jpg">
      </div>
      <div class="p-top-about__text-wrapper">
        <h2 class="p-top-about__heading">ABOUT US</h2>
        <div class="p-top-about__text01">皆様の「目の健康」を<br>第一に。</div>
        <div class="p-top-about__text02">「目の健康」<br>それは、充実した人生を感じるための重要な鍵。</div>
        <div class="p-top-about__text03">佐藤眼科医院は、開業以降、医療技術の進化を追求し、先進の設備を取り入れてきました。また、地域の方々の目に関する問題や願いに、真摯に対応して参りました。
        </div>
        <div class="p-top-about__text04">私たちが重視する医療の心は、「患者様との深い絆を持つ医療」です。その実現のため、スタッフ一同は常に患者様の近くにいることが絶対条件だと信じています。
        </div>
        <div class="p-top-about__more">
          <a class="c-more" href="<?php echo esc_url(home_url()); ?>/about">当院について詳しく見る</a>
        </div>
      </div>
    </div>
  </section>
  <section class="p-blog l-section l-section--gray fade-in-section">
    <div class="p-blog__inner l-inner">
      <h2 class="p-blog__heading c-heading">目のお話</h2>
      <div class="p-blog__body">
        <?php
        $args = [
          'post_type' => 'blog',
          'posts_per_page' => 3,
        ];
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <ul class="p-blog__list">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
      <div class="p-blog__more">
        <a class="c-more" href="<?php echo esc_url(home_url()); ?>/blog">目のお話一覧を見る</a>
      </div>
  </section>
  <section class="p-top-care l-section fade-in-section">
    <div class="p-top-care__inner l-inner">
      <h2 class="p-top-care__heading c-heading">診療内容</h2>
      <div class="p-top-care__lead">⼀般的な眼科診療から専⾨的な診断・治療<br class="u-sp-only">まで⾏っています。</div>
      <div class="p-top-care__body">
        <div class="p-care-list">
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
      <div class="p-top-care__more">
        <a class="c-more" href="<?php echo esc_url(home_url()); ?>/care">診療内容一覧を見る</a>
      </div>
    </div>
  </section>
  <section class="p-top-access l-section l-section--gray fade-in-section">
    <div class="p-top-access__inner l-inner">
      <div class="p-top-access__map-wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.5548823023905!2d139.70128657640004!3d35.71256972825089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d399ddaa763%3A0x954afc3e292c9a7e!2z6auY55Sw6aas5aC06aeF!5e0!3m2!1sja!2sjp!4v1696952103810!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="p-top-access__text-wrapper">
        <h2 class="p-top-access__heading">佐藤眼科医院</h2>
        <div class="p-top-access__table-wrapper">
          <table class="p-top-access__table">
            <tr>
              <th>電話</th>
              <td>123-456-7890</td>
            </tr>
            <tr>
              <th>住所</th>
              <td>〒000-0000 東京都新宿区高田馬場駅</td>
            </tr>
            <tr>
              <th>受付時間</th>
              <td>午前8:30-11:30（診療開始9:00）<br>午後2:30-5:30（診療開始午後3:00）</td>
            </tr>
            <tr>
              <th>休診日</th>
              <td>木曜午後・土曜午後・日曜・祝日</td>
            </tr>
            <tr>
              <th>駐車場</th>
              <td>18台分完備</td>
            </tr>
          </table>
        </div>
        <div class="p-top-access__more">
          <a class="c-more" href="<?php echo esc_url(home_url()); ?>/access">アクセスマップを詳しく見る</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>