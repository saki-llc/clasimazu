<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <title><?php echo esc_html(get_bloginfo('name')) ?></title>
    <meta name="description" content=<?php echo esc_attr(get_bloginfo('description')) ?> />
    <meta name="robots" content="noindex">

    <!-- OGPはプラグインで設定 -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>
        <?php if (is_front_page()) : ?>
            <h1 class="headerLogo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/clasimazu_logo.svg" alt="clasimazuロゴ">
                </a>
            </h1>
        <?php else : ?>
            <p class="headerLogo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/clasimazu_logo.svg" alt="clasimazuロゴ">
                </a>
            </p>
        <?php endif; ?>
        <div class="headerRight">
            <nav class="headerNavPc">
                <ul>
                    <li><a href="<?php echo home_url(); ?>/about-us">clas<span class="textRed">i</span>mazu</a></li>
                    <li><a href="<?php echo home_url(); ?>/message">Message</a></li>
                    <li><a href="<?php echo home_url(); ?>/archive-news">News</a></li>
                    <li><a href="<?php echo home_url(); ?>/success-story">Case</a></li>
                    <li><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
                </ul>
            </nav>
            <a href="/contact" class="button button208">
                <span>お問い合わせ</span>
                <span>→</span>
            </a>
        </div>
        <button class="headerHamburgerButton spOnly">
            <span class="headerHamburgerButtonLine"></span>
            <span class="headerHamburgerButtonLine"></span>
            <span class="headerHamburgerButtonLine"></span>
        </button>
        <nav class="spGlobalNav">
            <ul>
                <li>
                    <a href="<?php echo home_url(); ?>/about-us">clas<span class="textRed">i</span>mazu</a>
                    <div class="arrow32 red">→</div>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/message">Message</a>
                    <div class="arrow32 red">→</div>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/archive-news">News</a>
                    <div class="arrow32 red">→</div>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/success-story">Case</a>
                    <div class="arrow32 red">→</div>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/contact">Contact</a>
                    <div class="arrow32 red">→</div>
                </li>
            </ul>
            <?php generateButtonMain('お問い合わせ', '/contact', 'button208'); ?>
        </nav>
    </header>

    <main>