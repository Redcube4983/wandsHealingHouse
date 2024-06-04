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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper-bundle.min.css">
    <?php if( is_front_page() ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css">
    <?php elseif(is_page(array('event-program'))) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/event-program.css">
    <?php elseif(is_page(array('event-story'))) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/event-story.css">
    <?php elseif(is_page(array('about-us'))) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about-us.css">
    <?php elseif(is_page(array('about-channeling'))) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about-channeling.css">
    <?php elseif(is_page(array('channeling-message'))) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/channeling-message.css">
    <?php elseif(is_page(array('wands-association'))) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/channeling-message.css">
    <?php elseif(is_page(array('personal-program'))) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/personal-program.css">
    <?php elseif(is_page(array('voice'))) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/voice.css">
    <?php elseif(is_page(array('surrounding-info'))) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/surrounding-info.css">
    <?php elseif(is_page(array('faq'))) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/faq.css">
    <?php elseif(is_page(array('contact'))) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css">
    <?php elseif(is_page(array('policy'))) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/policy.css">
    <?php elseif(is_page(array('term-of-use'))) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/term-of-use.css">
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
                        <li><a href="<?php echo esc_url( home_url('voice') ); ?>">お客様の声</a></li>
                        <li><a href="<?php echo esc_url( home_url('surrounding-info') ); ?>">周辺情報</a></li>
                        <li><a href="<?php echo esc_url( home_url('faq') ); ?>">FAQ</a></li>
                        <li class="contact-button"><a href="<?php echo esc_url( home_url('contact') ); ?>">予約・お問い合わせ</a></li>
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
                    <a class="main-navi-link" href="<?php echo esc_url( home_url('event-program') ); ?>">イベントプログラム</a>
                    <div><span></span></div>
                    <ul class="sab-nav">
                        <li><a href="#">イベント詳細ページ</a></li>
                        <li><a href="<?php echo esc_url( home_url('event-story') ); ?>">イベントストーリー</a></li>
                        <li class="sub-page-link"><a class="sp-sub-link" href="<?php echo esc_url( home_url('#') ); ?>">イベントストーリー詳細</a></li>
                    </ul>
                </li>
                <li class="main-navi parent">
                    <a class="main-navi-link" href="<?php echo esc_url( home_url('personal-program') ); ?>">パーソナルプログラム</a>
                    <div><span></span></div>
                    <ul class="sab-nav">
                        <li><a href="#">チャネリングダイアローグ</a></li>
                        <li><a href="#">ボディセラピー&チャネリング</a></li>
                        <li class="sub-page-link"><a class="sp-sub-link" href="<?php echo esc_url( home_url('#') ); ?>">ボディリコネクションセラピー</a></li>
                    </ul>
                </li>
                <li class="main-navi parent">
                    <a class="main-navi-link" href="<?php echo esc_url( home_url( 'about-us') ); ?>">ワンズヒーリングハウスについて</a>
                    <div><span></span></div>
                    <ul class="sab-nav">
                        <li><a href="<?php echo esc_url( home_url( 'about-channeling') ); ?>">チャネリングについて</a></li>
                        <li class="sub-page-link"><a class="sp-sub-link" href="<?php echo esc_url( home_url( 'channeling-message') ); ?>">チャネリングの活用方法</a></li>
                        <li><a href="<?php echo esc_url( home_url( 'wands-association') ); ?>">WANDS アソシエーション</a></li>
                        <li class="sub-page-link"><a class="sp-sub-link" target="_blank" href="https://michaelnobuko.com/">大天使ミハエルは語る</a></li>
                    </ul>
                </li>
                <li class="main-navi sp-tab">
                    <a class="main-navi-link" href="<?php echo esc_url( home_url('voice') ); ?>">お客様の声</a>
                </li>
                <li class="main-navi sp-tab">
                    <a class="main-navi-link" href="<?php echo esc_url( home_url('surrounding-info') ); ?>">周辺情報</a>
                </li>
                <li class="main-navi sp-tab">
                    <a class="main-navi-link" href="<?php echo esc_url( home_url('faq') ); ?>">FAQ</a>
                </li>
                <li class="main-navi sp-tab">
                    <a class="main-navi-link" href="<?php echo esc_url( home_url('term-of-use') ); ?>">サイトのご利用について</a>
                </li>
                <li class="main-navi sp-tab">
                    <a class="main-navi-link" href="<?php echo esc_url( home_url('contact') ); ?>">お問い合わせ</a>
                </li>
            </ul>
        </nav>
    </header>