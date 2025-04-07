<?php get_header(); ?>
<?php generateSubPageHeader('お知らせ', 'News'); ?>

<?php
$title = get_the_title();
$date = get_the_date();
$content = get_the_content();
$thumbnail = get_the_post_thumbnail_url();
?>

<div class="singleNewsInner inner1040">
    <div class="singleNewsInfoArea animate">
        <p class="singleNewsDate"><?php echo $date; ?></p>
        <h2 class="singleNewsTitle"><?php echo $title; ?></h2>
        <p class="singleNewsThumbnail animate">
            <img src="<?php echo $thumbnail; ?>" alt="<?php echo $title; ?>">
        </p>
    </div>
    <div class="singleNewsContent animate">
        <?php echo $content; ?>
    </div>
    <a href="<?php echo home_url('/archive-news'); ?>" class="backButton animate">
        <div class="arrow32">←</div>
        <p>一覧に戻る</p>
</div>
</a>
<?php generateCTAComponent(); ?>
<?php generateContactComponent(); ?>

<?php get_footer(); ?>