<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<?php

/* ===============================================
  スクリプトとスタイルシートの読み込み
=============================================== */
function my_theme_scripts() {
  // Google Fonts
  wp_enqueue_style('montserratFont', "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap");

  // Swiper
  wp_enqueue_style('swiperStyle', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css");
  wp_enqueue_script('swiperScript', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js");

  // 他にもプラグインなどあれば追加

  // assets
  wp_enqueue_style("mainStyle", get_theme_file_uri('style.css'));
  wp_enqueue_script("mainJs", get_theme_file_uri('/assets/js/main.js'), array('swiperScript'), false, true);
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');

/* ===============================================
  サムネイルを有効化
=============================================== */
add_theme_support('post-thumbnails');


/*
   ボタンを生成する関数
 =============================================== */
function generateButtonMain($text, $link, $size = null, $color = null) { ?>
  <a href="<?php echo $link; ?>" class="button <?php echo $size; ?> <?php echo $color; ?>">
    <span><?php echo $text; ?></span>
    <span>→</span>
  </a>
<?php }

/*
  セクションタイトルを生成する関数
=============================================== */
function generateSectionTitle($english, $japanese, $color = null) { ?>
  <hgroup class="sectionTitleWrapper <?php echo $color; ?>">
    <p class="sectionTitleEnglish"><?php echo $english; ?></p>
    <h2 class="sectionTitleJapanese"><?php echo $japanese; ?></h2>
  </hgroup>
<?php }
