<?php get_header(); ?>
<?php generateSubPageHeader('代表メッセージ', 'Message'); ?>

<div class="messageInner inner1040">
    <?php generateSectionTitle('', '愛情・誠実・信頼'); ?>
    <div class="messageContentsArea">
        <div class="messageLeft">
            <p class="messageText animate">
                1965年の創業からこれまでお客様・お取引先様をはじめとする
                多くの方々のご支援をいただき、地域に密着した商いをさせていただきました。
                <br />
                だからこそ私たち島津組スタッフは、
                <br class="pcOnly" />
                ご縁をいただくすべての方々に常に愛情と
                感謝の心を持って業務を行う事を心がけております。
                <br />
                また会社の営みに欠かせない建物・不動産にも深い愛情を注ぎ、
                <br class="pcOnly" />
                地道に・真面目に・丁寧に、しっかりとしたサービスの
                <br class="pcOnly" />
                ご提供と万全のアフターメンテナンスを行います。
                <br />
                そしてスタッフ一人ひとりがお互いを信頼し合い、尊重し、
                <br class="pcOnly" />
                就業満足度を高めながらお客様満足に繋がる社風を醸成してまいります。
                <br />
                地域密着サービス企業がすべて消滅することは絶対にありません。
                <br />
                お客様がこの地域に快適な「くらし」を求められる以上は、
                <br class="pcOnly" />
                地元が育んだ商いは必ず愛されると信じています。
                <br />
                地域に必要とされる、なくてはならない会社を目指し、
                <br class="pcOnly" />
                地域に還元できる会社になることを、スタッフ一同夢見て頑張ります。
                <br />
            </p>
            <p class="messageName animate">
                <span>株式会社 島津組 代表取締役社長</span>
                <span>島津 志朗</span>
            </p>
        </div>
        <picture class="messageRight animate">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/subpages/message/ceo_photo_sp.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/subpages/message/ceo_photo_sp@2x.webp 2x" media="max-width: 960px">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/subpages/message/ceo_photo_pc.webp"
                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/subpages/message/ceo_photo_pc.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/subpages/message/ceo_photo_pc@2x.webp 2x"
                width="500"
                height="500"
                alt="代表取締役社長 島津 志朗" />
        </picture>
    </div>
</div>
<?php generateCTAComponent(); ?>
<?php generateContactComponent(); ?>

<?php get_footer(); ?>