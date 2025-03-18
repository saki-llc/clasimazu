<?php

/* ===============================================
  スクリプトとスタイルシートの読み込み
=============================================== */
function my_theme_scripts()
{
  // Google Fonts
  wp_enqueue_style('montserratNotoFont', "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap");

  // Swiper
  wp_enqueue_style('swiperStyle', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css");
  wp_enqueue_script('swiperScript', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js");

  // 他にもプラグインなどあれば追加

  // assets
  wp_enqueue_style("mainStyle", get_theme_file_uri('style.css'));
  wp_enqueue_script("mainJs", get_theme_file_uri('/assets/js/main.js'), array('swiperScript'), false, true);

  // 郵便番号API
  wp_enqueue_script('yubinbangoScript', "https://yubinbango.github.io/yubinbango/yubinbango.js", array(), false, true);
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');

/* ===============================================
  サムネイルを有効化
=============================================== */
add_theme_support('post-thumbnails');


/*
   ボタンを生成する関数
 =============================================== */
function generateButtonMain($text, $link, $size = null, $color = null)
{ ?>
  <a href="<?php echo $link; ?>" class="button <?php echo $size; ?> <?php echo $color; ?> animate">
    <span><?php echo $text; ?></span>
    <span>→</span>
  </a>
<?php }

/*
  セクションタイトルを生成する関数
=============================================== */
function generateSectionTitle($english, $japanese, $color = null)
{ ?>
  <hgroup class="sectionTitleWrapper <?php echo $color; ?>">
    <p class="sectionTitleEnglish animate"><?php echo $english; ?></p>
    <h2 class="sectionTitleJapanese animate"><?php echo $japanese; ?></h2>
  </hgroup>
<?php }

/* ===============================================
 *  サブページヘッダーを生成する関数
 =============================================== */
function generateSubPageHeader($title, $english)
{ ?>
  <section class="subPageHeader">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/subpage_header_sp.svg" media="max-width: 960px">
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/common/subpage_header_pc.svg"
        width="1440"
        height="442" />
    </picture>
    <hgroup class="subPageHeaderTitle">
      <h1 class="subPageHeaderTitleJapanese"><?php echo $title; ?></h1>
      <p class="subPageHeaderTitleEnglish"><?php echo $english; ?></p>
    </hgroup>
  </section>
<?php }

/* ===============================================
 *  CTAコンポーネントを生成する関数
 =============================================== */
function generateCTAComponent()
{ ?>
  <section class="ctaComponent animate">
    <?php generateButtonMain('お問い合わせはこちら', '/contact', 'button328'); ?>
    <?php generateButtonMain('カタログダウンロード', '#', 'button328'); ?>
  </section>
<?php }

/* ===============================================
 *  お問い合わせコンポーネントを生成する関数
 =============================================== */
function generateContactComponent()
{ ?>
  <section id="contact">
    <img class="animate" src="<?php echo get_template_directory_uri(); ?>/assets/images/front/contact_icon.svg" alt="携帯電話のアイコン">
    <p class="contactCta animate">
      お気軽にお問い合わせください
    </p>
    <a class="contactTel animate" href="tel:0120-475-008">
      0120-475-008
    </a>
    <p class="contactBusinessHours animate">
      電話受付時間：9：00〜17：00（定休日・水曜日）
    </p>
  </section>
<?php }

/* ===============================================
 *  about-usのlinksをコンポーネントとして生成する関数
 =============================================== */
function generateAboutUsLinksComponent()
{ ?>
  <div class="aboutUsLinks pcOnly">
    <div class="aboutUsLinksInner animate">
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/base_pc.webp"
        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/base_pc.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/base_pc@2x.webp 2x"
        width="1040"
        height="974"
        alt="くらしまずの事業説明グラフィック"
        class="animate" />
      <a class="aboutUsLinkItem aboutUsLinkItem1" href="https://www.google.com" target="_blank">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/icon1.webp"
          width="120"
          height="120"
          alt="建築事業部のアイコン" />
      </a>
      <a class="aboutUsLinkItem aboutUsLinkItem2" href="https://www.google.com" target="_blank">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/icon2.webp"
          width="120"
          height="120"
          alt="不動産事業部のアイコン" />
      </a>
      <a class="aboutUsLinkItem aboutUsLinkItem3" href="https://www.google.com" target="_blank">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/icon3.webp"
          width="120"
          height="120"
          alt="ぱぷりか 訪問看護ステーションのアイコン" />
      </a>
      <a class="aboutUsLinkItem aboutUsLinkItem4" href="https://www.google.com" target="_blank">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/icon4.webp"
          width="120"
          height="120"
          alt="士業連携のアイコン" />
      </a>
      <a class="aboutUsLinkItem aboutUsLinkItem5" href="https://www.google.com" target="_blank">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/icon5.webp"
          width="120"
          height="120"
          alt="信託事業のアイコン" />
      </a>
      <a class="aboutUsLinkItem aboutUsLinkItem6" href="https://www.google.com" target="_blank">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/icon6.webp"
          width="120"
          height="120"
          alt="資金（FP）相談のアイコン" />
      </a>
      <a class="aboutUsLinkItem aboutUsLinkItem7" href="https://www.google.com" target="_blank">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/icon7.webp"
          width="120"
          height="120"
          alt="鉄道事業部のアイコン" />
      </a>
      <?php generateButtonMain('詳細を見る', '#', 'button208'); ?>
    </div>
  </div>
  <div class="aboutUsLinksSpOnly spOnly">
    <p class="aboutUsLinksLogo animate">
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/logo_box.svg"
        width="201"
        height="124"
        alt="くらしまずのロゴ" />
    </p>
    <div class="aboutUsLinksList animate">
      <div class="aboutUsLinksItem animate">
        <a class="aboutUsLinksItemIcon" href="https://www.google.com" target="_blank">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/icon1.webp"
            width="120"
            height="120"
            alt="建築事業部のアイコン" />
        </a>
        <div class="aboutUsLinksItemRight">
          <div class="aboutUsLinksItemTitle">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/title-icon1.svg"
              width="120"
              height="120"
              alt="建築事業部のアイコン"
              class="aboutUsLinksItemTitleIcon" />
            <p class="aboutUsLinksItemTitleText">建築事業部</p>
          </div>
          <ul class="aboutUsLinksItemList">
            <li>新築・リノベーション</li>
            <li>リフォーム・非住宅</li>
            <li>定期訪問</li>
            <li>アフターメンテナンス</li>
          </ul>
        </div>
      </div>
      <div class="aboutUsLinksItem animate">
        <a class="aboutUsLinksItemIcon" href="https://www.google.com" target="_blank">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/icon2.webp"
            width="120"
            height="120"
            alt="不動産事業部のアイコン" />
        </a>
        <div class="aboutUsLinksItemRight">
          <div class="aboutUsLinksItemTitle">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/title-icon2.svg"
              width="120"
              height="120"
              alt="不動産事業部のアイコン"
              class="aboutUsLinksItemTitleIcon" />
            <p class="aboutUsLinksItemTitleText">不動産事業部</p>
          </div>
          <ul class="aboutUsLinksItemList">
            <li>不動産売買・仲介</li>
            <li>中古再販・空家対策</li>
            <li>土地活用</li>
          </ul>
        </div>
      </div>
      <div class="aboutUsLinksItem animate">
        <a class="aboutUsLinksItemIcon" href="https://www.google.com" target="_blank">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/icon3.webp"
            width="120"
            height="120"
            alt="ぱぷりか 訪問看護ステーションのアイコン" />
        </a>
        <div class="aboutUsLinksItemRight">
          <div class="aboutUsLinksItemTitle">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/title-icon3.svg"
              width="120"
              height="120"
              alt="ぱぷりか 訪問看護ステーションのアイコン"
              class="aboutUsLinksItemTitleIcon" />
            <p class="aboutUsLinksItemTitleText">ぱぷりか訪問<br>看護ステーション</p>
          </div>
          <ul class="aboutUsLinksItemList">
            <li>日常生活サポート</li>
            <li>療養生活のアドバイス</li>
            <li>医療処置・医療機器管理</li>
            <li>介護される方のサポート</li>
            <li>服薬管理</li>
            <li>症状・障害の観察</li>
            <li>ターミナルケア</li>
          </ul>
        </div>
      </div>
      <div class="aboutUsLinksItem animate">
        <a class="aboutUsLinksItemIcon" href="https://www.google.com" target="_blank">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/icon4.webp"
            width="120"
            height="120"
            alt="士業連携のアイコン" />
        </a>
        <div class="aboutUsLinksItemRight">
          <div class="aboutUsLinksItemTitle">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/title-icon4.svg"
              width="120"
              height="120"
              alt="士業連携のアイコン"
              class="aboutUsLinksItemTitleIcon" />
            <p class="aboutUsLinksItemTitleText">士業連携</p>
          </div>
          <ul class="aboutUsLinksItemList">
            <li>弁護士・司法書士</li>
            <li>行政書士・会計士</li>
            <li>社会保険労務士</li>
          </ul>
        </div>
      </div>
      <div class="aboutUsLinksItem animate">
        <a class="aboutUsLinksItemIcon" href="https://www.google.com" target="_blank">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/icon5.webp"
            width="120"
            height="120"
            alt="信託事業のアイコン" />
        </a>
        <div class="aboutUsLinksItemRight">
          <div class="aboutUsLinksItemTitle">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/title-icon5.svg"
              width="120"
              height="120"
              alt="信託事業のアイコン"
              class="aboutUsLinksItemTitleIcon" />
            <p class="aboutUsLinksItemTitleText">信託事業</p>
          </div>
          <ul class="aboutUsLinksItemList">
            <li>新築・リノベーション</li>
            <li>リフォーム・非住宅</li>
            <li>定期訪問</li>
            <li>アフターメンテナンス</li>
          </ul>
        </div>
      </div>
      <div class="aboutUsLinksItem animate">
        <a class="aboutUsLinksItemIcon" href="https://www.google.com" target="_blank">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/icon6.webp"
            width="120"
            height="120"
            alt="資金（FP）相談のアイコン" />
        </a>
        <div class="aboutUsLinksItemRight">
          <div class="aboutUsLinksItemTitle">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/title-icon6.svg"
              width="120"
              height="120"
              alt="資金（FP）相談のアイコン"
              class="aboutUsLinksItemTitleIcon" />
            <p class="aboutUsLinksItemTitleText">資金（FP）相談</p>
          </div>
          <ul class="aboutUsLinksItemList">
            <li>貯蓄計画・保険相談</li>
            <li>税金対策・老後資金</li>
            <li>教育費</li>
          </ul>
        </div>
      </div>
      <div class="aboutUsLinksItem animate">
        <a class="aboutUsLinksItemIcon" href="https://www.google.com" target="_blank">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/icon7.webp"
            width="120"
            height="120"
            alt="鉄道事業部のアイコン" />
        </a>
        <div class="aboutUsLinksItemRight">
          <div class="aboutUsLinksItemTitle">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about-clasimazu/title-icon7.svg"
              width="120"
              height="120"
              alt="鉄道事業部のアイコン"
              class="aboutUsLinksItemTitleIcon" />
            <p class="aboutUsLinksItemTitleText">鉄道事業部</p>
          </div>
          <ul class="aboutUsLinksItemList">
            <li>車両内装</li>
            <li>車両修繕</li>
            <li>車両検査</li>
          </ul>
        </div>
      </div>
    </div>
    <?php generateButtonMain('詳細を見る', '#', 'button208'); ?>
  </div>
<?php }
