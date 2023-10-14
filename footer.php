<footer class="l-footer">
  <div class="l-footer__inner">
    <div class="l-footer__nav">
      <div class="l-footer__logo">
        <img class="l-footer__logo-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.png">
      </div>
      <div class="l-footer__info p-info">
        <div class="p-info__tel-wrapper">
          <img class="p-info__tel-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/tel.png">
          <a class="p-info__tel" href="tel:123-456-7890">123-456-7890</a>
        </div>
        <div class="p-info__text">休診：木曜午後／土曜午後／日祝</div>
      </div>
    </div>
    <div class="l-footer__copyright">&copy;<?php echo wp_date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reseved.</div>
  </div>
  <?php wp_footer(); ?>
</footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>