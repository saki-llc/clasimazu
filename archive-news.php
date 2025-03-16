<?php get_header(); ?>
<?php generateSubPageHeader('お知らせ', 'News'); ?>

<div class="archiveNewsInner inner1040">
    <div class="archiveNewsList">
        <?php
        $args = array(
            'post_type' => 'news',
            'posts_per_page' => 5,
            'orderby' => 'date',
            'order' => 'DESC'
        );

        $query = new WP_Query($args);
        ?>

        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php
                $thumbnail = get_the_post_thumbnail_url();
                $title = get_the_title();
                $date = get_the_date();
                $excerpt = get_the_excerpt();
                $excerpt80 = mb_substr($excerpt, 0, 80); // 80文字までに制限
                ?>
                <a class="archiveNewsItem" href="<?php the_permalink(); ?>">
                    <p class="archiveNewsItemThumbnail">
                        <img
                            src="<?php echo $thumbnail; ?>"
                            width="183"
                            height="140"
                            alt="<?php echo $title; ?>" />
                    </p>
                    <div class="archiveNewsItemText">
                        <p class="archiveNewsItemDate"><?php echo $date; ?></p>
                        <h3 class="archiveNewsItemTitle"><?php echo $title; ?></h3>
                        <p class="archiveNewsItemExcerpt"><?php echo $excerpt80; ?></p>
                    </div>
                </a>
            <?php endwhile; ?>
        <?php else : ?>
            <p>投稿が見つかりませんでした。</p>
        <?php endif; ?>
    </div>

    <div class="pagination animate">
        <?php
        $big = 999999999;
        echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '/page/%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $query->max_num_pages,
            'prev_text' => __('←'),
            'next_text' => __('→'),
        ));
        wp_reset_postdata(); // クエリをリセット
        ?>
    </div>
</div>
<?php generateCTAComponent(); ?>
<?php generateContactComponent(); ?>

<?php get_footer(); ?>