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
    <div class="aboutUsInner">
        <!-- セクションタイトルが特殊であるためこちらだけ静的に記載 -->
        <hgroup class="sectionTitleWrapper">
            <p class="sectionTitleEnglish">Concept</p>
            <h2 class="sectionTitleJapanese">clas<span class="TextRed">i</span>mazu<span class="fontWeightBold">について</span></h2>
        </hgroup>
        <picture class="aboutUsImage">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/about-clasimazu_sp.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/front/about-clasimazu_sp@2x.webp 2x" media="max-width: <?php echo $spBreakPoint; ?>px">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/front/about-clasimazu_pc.webp"
                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/about-clasimazu_pc.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/front/about-clasimazu_pc@2x.webp 2x"
                width="1040"
                height="974"
                alt="clasimazuについて" />
        </picture>
        <?php generateButtonMain('お問い合わせ', '#', 'button208'); ?>
    </div>
    <img class="aboutUsShape1" src="<?php echo get_template_directory_uri(); ?>/assets/images/front/shape3.svg"></img>
    <img class="aboutUsShape2" src="<?php echo get_template_directory_uri(); ?>/assets/images/front/shape4.svg"></img>
</section>

<section id="message">
    <div class="messageInner">
        <div class="messageLeft">
            <?php generateSectionTitle('Message', '愛情・誠実・信頼'); ?>
            <p class="messageText">
                1965年の創業からこれまでお客様・お取引先様をはじめとする
                <br />
                多くの方々のご支援をいただき、地域に密着した商いをさせていただきました。
                <br />
                だからこそ私たち島津組スタッフは、
                <br />
                ご縁をいただくすべての方々に常に愛情と
                <br />
                感謝の心を持って業務を行う事を心がけております。
                <br />
                また会社の営みに欠かせない建物・不動産にも深い愛情を注ぎ、
                <br />
                地道に・真面目に・丁寧に、しっかりとしたサービスの
                <br />
                ご提供と万全のアフターメンテナンスを行います。
                <br />
                そしてスタッフ一人ひとりがお互いを信頼し合い、尊重し、
                <br />
                就業満足度を高めながらお客様満足に繋がる社風を醸成してまいります。
                <br />
                地域密着サービス企業がすべて消滅することは絶対にありません。
                <br />
                お客様がこの地域に快適な「くらし」を求められる以上は、
                <br />
                地元が育んだ商いは必ず愛されると信じています。
                <br />
                地域に必要とされる、なくてはならない会社を目指し、
                <br />
                地域に還元できる会社になることを、スタッフ一同夢見て頑張ります。
                <br />
            </p>
            <p class="messageName">
                <span>株式会社 島津組 代表取締役社長</span>
                <span>島津 志朗</span>
            </p>
        </div>
        <picture class="messageRight">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/ceo_photo_sp.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/front/ceo_photo_sp@2x.webp 2x" media="max-width: <?php echo $spBreakPoint; ?>px">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/front/ceo_photo_pc.webp"
                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/ceo_photo_pc.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/front/ceo_photo_pc@2x.webp 2x"
                width="500"
                height="500"
                alt="代表取締役社長 島津 志朗" />
        </picture>
    </div>
    <?php generateButtonMain('詳細を見る', '#', 'button208'); ?>
    <img class="messageShape1" src="<?php echo get_template_directory_uri(); ?>/assets/images/front/shape5.svg"></img>
</section>

<section id="ctaArea">
    <?php generateButtonMain('お問い合わせはこちら', '#', 'button328'); ?>
    <?php generateButtonMain('カタログダウンロード', '#', 'button328'); ?>
</section>

<section id="contact">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/contact_icon.svg" alt="携帯電話のアイコン">
    <p class="contactCta">
        お気軽にお問い合わせください
    </p>
    <a class="contactTel" href="tel:0120-475-008">
        0120-475-008
    </a>
    <p class="contactBusinessHours">
        電話受付時間：9：00〜17：00（定休日・水曜日）
    </p>
</section>

<?php get_footer(); ?>