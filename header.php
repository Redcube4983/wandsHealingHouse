<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>Wands Healing House</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <link rel="icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/swiper-bundle.min.css">
    <?php if( is_front_page() ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css">
    <?php elseif(is_page(array('event-program'))) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/event-program.css">
    <?php elseif(is_page(array('event-story'))) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/event-story.css">
    <?php elseif(is_page(array('about-us'))) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about-us.css">
    <?php else: ?>
    <?php endif; ?>
    <!-- jquery 3.6.1 -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <?php wp_head(); ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2HW08KB3L9"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-2HW08KB3L9');
    </script>

</head>
<body>
    <header>
        <div id="header-top">
            <div id="header-top-left">
                <a href="/">
                    <h1 class="site-logo"><img src="<?php echo get_template_directory_uri(); ?>/common/images/house_logo.png" width="300" height="70" alt=""></h1>
                </a>
            </div>
            <div id="header-top-right">
                <div id="sab-navi">
                    <ul>
                        <li><a href="#">お客様の声</a></li>
                        <li><a href="#">Q&A</a></li>
                        <li class="contact-button"><a href="#">予約・お問い合わせ</a></li>
                    </ul>    
                </div>
            </div>
        </div>
        <div id="toggle">
            <div id="toggle-inner">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <nav id="global-navi">
            <ul id="global-main">
                <li class="main-navi parent">
                    <a class="main-navi-link" href="#">イベントプログラム</a>
                    <div><span></span></div>
                    <ul class="sab-nav">
                        <li><a href="#">イベント詳細ページ</a></li>
                        <li><a href="#">イベントストーリー</a></li>
                        <li class="sub-page-link"><a class="sp-sub-link" href="#">イベントストーリー詳細</a></li>
                    </ul>
                </li>
                <li class="main-navi parent">
                    <a class="main-navi-link" href="#">パーソナルプログラム</a>
                    <div><span></span></div>
                    <ul class="sab-nav">
                        <li><a href="#">ボディセラピー</a></li>
                        <li class="sub-page-link"><a class="sp-sub-link" href="#">ボディリコネクションセラピー</a></li>
                        <li><a href="#">チャネリングダイアローグ</a></li>
                    </ul>
                </li>
                <li class="main-navi parent">
                    <a class="main-navi-link" href="#">ワンズヒーリングハウスについて</a>
                    <div><span></span></div>
                    <ul class="sab-nav">
                        <li><a href="#">チャネリングについて</a></li>
                        <li class="sub-page-link"><a class="sp-sub-link" href="#">チャネリングの活用方法</a></li>
                        <li><a href="#">WANDS アソシエーション</a></li>
                        <li class="sub-page-link"><a class="sp-sub-link" href="#">大天使ミハエルは語る</a></li>
                    </ul>
                </li>
                <li class="main-navi sp-tab">
                    <a class="main-navi-link" href="#">お客様の声</a>
                </li>
                <li class="main-navi sp-tab">
                    <a class="main-navi-link" href="#">Q&A</a>
                </li>
                <li class="main-navi sp-tab">
                    <a class="main-navi-link" href="#">サイトのご利用について</a>
                </li>
                <li class="main-navi sp-tab">
                    <a class="main-navi-link" href="#">お問い合わせ</a>
                </li>
            </ul>
        </nav>
    </header>