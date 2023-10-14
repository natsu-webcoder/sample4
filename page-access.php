<?php get_header(); ?>
<main>
  <section class="p-access l-section">
    <div class="p-access__inner l-inner">
      <h2 class="p-access__heading c-heading">アクセスマップ</h2>
      <div class="p-access__body">
        <div class="p-access__map-wrapper">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.5548823023905!2d139.70128657640004!3d35.71256972825089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d399ddaa763%3A0x954afc3e292c9a7e!2z6auY55Sw6aas5aC06aeF!5e0!3m2!1sja!2sjp!4v1696952103810!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="p-access__address"><span>住所</span>　〒000-0000 東京都新宿区高田馬場駅</div>
        <div class="p-access__text-wrapper">
          <ul class="p-access__list">
            <li class="p-access__item">
              <div class="p-access__item-title">電車でお越しの方へ</div>
              <div class="p-access__item-text">JR山手線：高田馬場駅より500m・徒歩6分</div>
            </li>
            <li class="p-access__item">
              <div class="p-access__item-title">乗合タクシーでお越しの方へ</div>
              <div class="p-access__item-text">高田馬場乗合タクシー：文化センター入口</div>
            </li>
            <li class="p-access__item">
              <div class="p-access__item-title">バスでお越しの方へ</div>
              <div class="p-access__item-text">高田馬場市民バス（T／B／H）：文化センター入口</div>
            </li>
            <li class="p-access__item">
              <div class="p-access__item-title">車でお越しの方へ</div>
              <div class="p-access__item-text">駐車場完備：病院前 5台（障害者等用：1台分）・第2駐車場 8台・第3駐車場 6台</div>
            </li>
          </ul>
        </div>
      </div>
  </section>
  <section class="p-parking">
    <div class="p-parking__inner l-inner">
      <h2 class="p-parking__heading c-heading">駐車場のご案内</h2>
      <div class="p-parking__body">
        <div class="p-parking__img-wrapper">
          <img class="p-parking__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/parking.jpg">
        </div>
        <div class="p-parking__text-wrapper">
          <div class="p-parking__text01">収容台数16台の無料駐⾞場を1Fに併設しております。お⾞でお越しの⽅はぜひご利⽤ください。</div>
          <div class="p-parking__text02">※注意：近隣施設への迷惑駐車はしないでください</div>
          <div class="p-parking__text03">※当院すべての駐車場内での事故・盗難等の責任は一切負いかねます</div>
        </div>
      </div>
  </section>
</main>
<?php get_footer(); ?>