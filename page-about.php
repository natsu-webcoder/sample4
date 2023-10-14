<?php get_header(); ?>
<main>
  <section class="p-feature l-section">
    <div class="p-feature__inner l-inner">
      <h2 class="p-feature__heading">Features of our hospital</h2>
      <div class="p-feature__body">
        <div class="p-feature__text-wrapper">
          <div class="p-feature__text01">患者様のためを最優先に考えて<br class="u-tb-sp-only">行動しています</div>
          <div class="p-feature__text02">
            最新の技術と機器を導入することで、正確な診断と治療を提供する体制を整えています。<br>さらに、当院には5名の国家資格を持つ視能訓練士が在籍しており、<br>白内障や網膜硝子体の手術も行っています。
          </div>
        </div>
        <div class="p-feature__img-wrapper">
          <img class="p-feature__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/feature.jpg">
        </div>
      </div>
  </section>
  <section class="p-docter">
    <div class="p-docter__inner l-inner">
      <h2 class="p-docter__heading c-heading">院長紹介</h2>
      <div class="p-docter__body">
        <div class="p-docter__img-wrapper">
          <img class="p-docter__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/docter.jpg">
        </div>
        <div class="p-docter__text-wrapper">
          <div class="p-docter__name">院長　佐藤 高志</div>
          <div class="p-docter__name__text01">医学博士 / 眼科専門医<br>視覚障害者認定医 / PDT認定医<br>特定疾病指定医</div>
          <div class="p-docter__name__text02">【略歴】<br>平成10年　東京医科大学 卒業<br>平成10年　東京医科大学附属病院 眼科学教室 入局<br>平成21年　葉山眼科クリニック 勤務<br>平成23年～25年　富士山赤十字病院 眼科 非常勤<br>平成27年　佐藤眼科医院　院長</div>
          <div class="p-docter__name__text03">【所属学会】<br>・日本眼科学会<br>・日本網膜硝子体学会<br>・日本緑内障学会</div>
        </div>
      </div>
  </section>
</main>
<?php get_footer(); ?>