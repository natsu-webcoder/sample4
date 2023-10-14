<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="佐藤眼科医院のホームページです" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-192x192.png">
  <link rel="apple-touch-icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/apple-touch-icon-180x180.png">
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicon.ico">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="l-wrapper">
    <header class="l-header">
      <div class="l-header__inner">
        <h1 class="l-header__logo">
          <a class="l-header__logo-link" href="<?php echo esc_url(home_url()); ?>">
            <img class="l-header__logo-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.png">
          </a>
        </h1>
        <div class="l-header__nav">
          <ul class="l-header__list">
            <li class="l-header__item">
              <a class="l-header__item-link" href="<?php echo esc_url(home_url()); ?>/about">当院について<span>ABOUT US</span></a>
            </li>
            <li class="l-header__item">
              <a class="l-header__item-link" href="<?php echo esc_url(home_url()); ?>/care">診療内容<span>CARE</span></a>
            </li>
            <li class="l-header__item">
              <a class="l-header__item-link" href="<?php echo esc_url(home_url()); ?>/access">アクセス<span>ACCESS</span></a>
            </li>
            <li class="l-header__item">
              <a class="l-header__item-link" href="<?php echo esc_url(home_url()); ?>/news">お知らせ<span>NEWS</span></a>
            </li>
            <li class="l-header__item">
              <a class="l-header__item-link" href="<?php echo esc_url(home_url()); ?>/blog">目のお話<span>BLOG</span></a>
            </li>
          </ul>
          <div class="l-header__info p-info">
            <div class="l-header__info-tel-wrapper p-info__tel-wrapper">
              <img class="l-header__info-tel-img p-info__tel-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/tel.png">
              <a class="l-header__info-tel p-info__tel" href="tel:123-456-7890">123-456-7890</a>
            </div>
            <div class="l-header__info-text p-info__text">休診：木曜午後／土曜午後／日祝</div>
          </div>
        </div>
        <button type="button" class="c-btn-menu js-btn-menu">
          <span class="c-btn-menu__line"></span>
        </button>
      </div>
    </header>
    <?php if (is_front_page()) : ?>
      <div class="p-kv">
        <div class="p-kv__inner">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img class="p-kv__img p-kv__img--01" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/kv1.jpg">
                <div class="swiper-text">
                  <div class="swiper-text__en">Building a Future.</div>
                  <div class="swiper-text__jp">新しい未来を<br>築くために。</div>
                </div>
              </div>
              <div class="swiper-slide">
                <img class="p-kv__img p-kv__img--02" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/kv2.jpg">
                <div class="swiper-text">
                  <div class="swiper-text__en">Compassionate Healthcare.</div>
                  <div class="swiper-text__jp">患者様目線の<br>医療を。</div>
                </div>
              </div>
              <div class="swiper-slide">
                <img class="p-kv__img p-kv__img--03" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/kv3.jpg">
                <div class="swiper-text">
                  <div class="swiper-text__en">Protecting Your Vision.</div>
                  <div class="swiper-text__jp">あなたの目を<br>守ります。</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php else : ?>
      <div class="p-sub-kv">
        <div class="p-sub-kv__inner">
          <div class="p-sub-kv__img-wrapper">
            <?php
            if (is_page()) :
              // 現在のページがcareの子ページの場合、親ページのスラッグを取得
              if ($post->post_parent == get_page_by_path('care')->ID) :
                $slug = 'care';
              else :
                $slug = get_queried_object()->post_name;
              endif;
            elseif (is_home() || is_category() || is_singular('post')) :
              $slug = 'news';
            elseif (is_post_type_archive('blog') || is_tax() || is_singular('blog')) :
              $slug = 'blog';
            endif;
            ?>
            <img class="p-sub-kv__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/<?php echo $slug; ?>.jpg">
          </div>
          <div class="p-sub-kv__heading">
            <div class="p-sub-kv__heading__inner">
              <h2 class="p-sub-kv__heading-jp">
                <?php
                if (is_page()) :
                  // 現在のページがcareの子ページの場合、親ページのタイトルを取得
                  if ($post->post_parent == get_page_by_path('care')->ID) :
                    echo get_the_title(get_page_by_path('care')->ID);
                  else :
                    echo get_the_title();
                  endif;
                elseif (is_home() || is_singular('post')) :
                  echo 'お知らせ';
                elseif (is_post_type_archive('blog') || is_tax() || is_singular('blog')) :
                  echo '目のお話';
                endif;
                ?>
              </h2>
              <div class="p-sub-kv__heading-en">
                <?php
                if (is_page()) :
                  // 現在のページがcareの子ページの場合、親ページのenglish_titleを取得
                  if ($post->post_parent == get_page_by_path('care')->ID) :
                    echo get_field('english_title', get_page_by_path('care')->ID);
                  else :
                    echo get_field('english_title');
                  endif;
                elseif (is_home() || is_singular('post')) :
                  echo 'NEWS';
                elseif (is_post_type_archive('blog') || is_tax() || is_singular('blog')) :
                  echo 'BLOG';
                endif;
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>