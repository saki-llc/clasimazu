<?php get_header(); ?>
<?php generateSubPageHeader('お問い合わせ', 'Contact us'); ?>

<div class="formConfirmPageInner inner1040">
    <?php echo do_shortcode('[contact-form-7 id="a1998c2" title="内容確認用フォーム"]'); ?>
</div>
<?php generateCTAComponent() ?>
<?php generateContactComponent() ?>

<?php get_footer(); ?>