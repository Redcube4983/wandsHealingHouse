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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/swiper-bundle.min.css">
    <!-- jquery 3.6.1 -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <?php wp_head(); ?>
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
                </li>
                <li class="main-navi parent">
                    <a class="main-navi-link" href="#">イベントストーリー</a>
                    <div><span></span></div>
                    <ul class="sab-nav">
                        <li><a href="#">イベントストーリー詳細</a></li>
                    </ul>
                </li>
                <li class="main-navi parent">
                    <a class="main-navi-link" href="#">ボディセラピー</a>
                    <div><span></span></div>
                    <ul class="sab-nav">
                        <li><a href="#">ボディリコネクションセラピー</a></li>
                    </ul>
                </li>
                <li class="main-navi">
                    <a class="main-navi-link" href="#">チャネリング ダイアローグ</a>
                </li>
                <li class="main-navi">
                    <a class="main-navi-link" href="#">イベント/<br class="br02">ワークショップ</a>
                </li>
                <li class="main-navi parent">
                    <a class="main-navi-link" href="#">ワンズヒーリング<br class="br02">ハウスについて</a>
                    <div><span></span></div>
                    <ul class="sab-nav">
                        <li><a href="#">チャネリングについて</a></li>
                        <li><a class="sp-sub-link" href="#">チャネリングの活用方法</a></li>
                        <li><a href="#">WANDS アソシエーション</a></li>
                        <li><a class="sp-sub-link" href="#">大天使ミハエルは語る</a></li>
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