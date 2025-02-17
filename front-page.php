<?php get_header(); ?>

<!-- TODO:SPの画像を仮でパス指定しているので、SPの画像を用意してください -->
<section id="mv">
    <div class="mvSwiper mvTop">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/mv1_sp.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/front/mv1_sp@2x.webp 2x" media="max-width: <?php echo $tabletBreakPoint; ?>px">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/front/mv1_pc.webp"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/mv1_pc.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/front/mv1_pc@2x.webp 2x"
                        width="1440"
                        height="680"
                        alt="母が子どもを抱いている写真" />
                </picture>
            </div>
            <div class="swiper-slide">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/mv2_sp.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/front/mv2_sp@2x.webp 2x" media="max-width: <?php echo $tabletBreakPoint; ?>px">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/front/mv2_pc.webp"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/mv2_pc.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/front/mv2_pc@2x.webp 2x"
                        width="1440"
                        height="680"
                        alt="お金について相談している写真" />
                </picture>
            </div>
            <div class="swiper-slide">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/mv3_sp.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/front/mv3_sp@2x.webp 2x" media="max-width: <?php echo $tabletBreakPoint; ?>px">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/front/mv3_pc.webp"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/mv3_pc.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/front/mv3_pc@2x.webp 2x"
                        width="1440"
                        height="680"
                        alt="介護をしている写真" />
                </picture>
            </div>
        </div>
    </div>
    <div class="mvBottom">
        <a class="mvNews">
            <div class="mvNewsInner">
                <h2 class="mvNewsSectionTitle">
                    News
                </h2>
                <div class="mvNewsContent">
                    <p class="mvNewsDate">
                        2025.03.02
                    </p>
                    <p class="mvNewsTitle">
                        お客様と共に住まいづくりの物語を語り合いたい。
                    </p>
                </div>
            </div>
        </a>
        <div class="mvCopyArea">
            <h2 class="mvCopy">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/front/mvCopy.svg"
                    width="549"
                    height="104"
                    alt="くらしのまん中に、アイがある。" />
            </h2>
            <p class="mvCopyText">
                プレミアムカーやI0T
                <br />
                （あらゆるモノをインターネットやネットワークに接続する技術）を
                <br />
                導入した先進的なモデルハウスを拠点に
                <br />
                建築に留まらず不動産活用、資産運用、カーファンド、
                <br />
                資金相談、信託など様々な情報を提供しながら
                <br /><br>
                お金のこと、法律のこと、家族のこと、相続のこと・・・
                <br />
                くらしにまつわるお困りごとを専門家ネットワークを活用した
                <br />
                士業連携で『ワンストップ』で解決する。
                <br /><br />
                その入り口がclas<span class="TextRed">i</span>mazu（島津組サービスブランドの総称）です。
                <br />
                のことならclas<span class="TextRed">i</span>mazu島津組へ
                <br />
                くらしのまん中に<span class="TextRed">i(愛)</span>がある
            </p>
            <p class="mvCopyLogo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/clasimazu_logo.svg" alt="clasimazuロゴ">
                </a>
            </p>
        </div>
        <div class="mvBottomImages">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/mv_bottom_images_sp.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/front/mv_bottom_images_sp@2x.webp 2x" media="max-width: <?php echo $spBreakPoint; ?>px">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/front/mv_bottom_images_pc.webp"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/mv_bottom_images_pc.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/front/mv_bottom_images_pc@2x.webp 2x"
                    width="628"
                    height="391"
                    alt="施工事例イメージ" />
            </picture>
        </div>
        <img class="mvBottomShape1" src="<?php echo get_template_directory_uri(); ?>/assets/images/front/shape1.svg"></img>
        <img class="mvBottomShape2" src="<?php echo get_template_directory_uri(); ?>/assets/images/front/shape2.svg"></img>
    </div>
</section>

<section id="aboutUs">
    <!-- セクションタイトルが特殊であるためこちらだけ静的に記載 -->
    <hgroup class="sectionTitleWrapper">
        <p class="sectionTitleEnglish">Concept</p>
        <h2 class="sectionTitleJapanese">clas<span class="TextRed">i</span>mazu<span class="fontWeightBold">について</span></h2>
    </hgroup>
</section>


<?php get_footer(); ?>