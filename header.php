<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <title><?php echo esc_html(get_bloginfo('name')) ?></title>
    <meta name="description" content=<?php echo esc_attr(get_bloginfo('description')) ?> />
    <meta name="robots" content="noindex">

    <meta property="og:site_name" content="" />
    <meta property="og:locale" content="" />
    <meta property="og:description" content="">
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:image:width" content="">
    <meta property="og:image:height" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="" />
    <meta name="twitter:card" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image:src" content="" />

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
            <nav class="headerNav--pc">
                <ul>
                    <li><a href="#">clasimazu</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Message</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Voice</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <?php generateButtonMain('お問い合わせ', '#', 'button200'); ?>
        </div>
    </header>

    <main>