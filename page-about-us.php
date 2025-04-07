<?php get_header(); ?>
<section class="subPageHeader">
    <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/subpage_header_sp.svg" media="max-width: 960px">
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/common/subpage_header_pc.svg"
            width="1440"
            height="442" />
    </picture>
    <hgroup class="subPageHeaderTitle">
        <h1 class="subPageHeaderTitleJapanese">clas<span class="textRed">i</span>mazuについて</h1>
        <p class="subPageHeaderTitleEnglish">About</p>
    </hgroup>
</section>

<section id="aboutUs">
    <div class="aboutUsInner inner1040">
        <div class="aboutUsCopyArea">
            <p class="aboutUsCopyEnglish animate">Concept</p>
            <p class="aboutUsCopyJapanese animate">clas<span class="textRed">i</span>mazuについて</p>
            <p class="aboutUsCopyParagraph animate">
                不動産、資金計画、ファンド運用など、暮らしに関わるすべてを専門家が総合的にサポート。
                <br>
                住まいの購入から資産形成、将来設計まで、一人ひとりの人生設計に寄り添い、最適な選択を提案します。
                <br>
                安心できる暮らしの基盤を築くために、専門知識と豊富な経験を活かし、お客様の夢と目標を実現へ近づけます。
                <br>
                ワンストップであなたの未来を支える、信頼のパートナーとしてあなたのくらしの真ん中に。
                <br><br>
                その入り口がclas<span class="textRed">i</span>mazu（島津組サービスブランドの総称）です。
                <br>
                <span class="mincho">くらしのまん中に<span class="textRed">i(愛)</span>がある。</span>
            </p>
        </div>
        <?php generateAboutUsLinksComponent(); ?>
    </div>
    <?php generateCTAComponent(); ?>
    <?php generateContactComponent(); ?>
</section>
<?php get_footer(); ?>