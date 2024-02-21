<footer>
    <section class="contact-button-wrap">
        <a href="#" class="button"><span>contact</span><br><h3>ご予約・お問い合わせはこちら</h3></a>
    </section>
    <div class="footer-wrap">
        <div class="footer-flbox">
            <div id="info-wrap">
                <a id="footer-site-logo" href="#">
                    <h2><img class="footer-site-logo" src="<?php echo get_template_directory_uri(); ?>/images/top/house_logo.png"  alt="">
                    </h2>
                </a>
                <div class="open-wrap">
                    <p><span>営業時間</span><br>11:00-18:00（最終受付時間）<br>定休日：木曜日</p>
                </div>
                <div class="access-wrap">
                    <p><span>アクセス</span><br>JR山手線 駒込駅（東口または北口）より<br class="sp">
                        徒歩８分<br>東京メトロ南北線 駒込駅（５番出口）より<br class="sp">徒歩8分</p>
                </div>
                <div class="sns-wrap">
                    <div class="sns line"><a href="#">LINE</a></div>
                    <div class="sns insta"><a href="#">INSTAGRAM</a></div>
                    <div class="sns face"><a href="#">Facebook</a></div>
                </div>
            </div>
            <div id="footer-sitemap">
                <ul class="footer-sitemap">
                    <div class="footer-left">
                        <li class="main-navi parent">
                            <h3><a class="main-navi-link" href="#">イベントプログラム</a></h3>
                            <div><span></span></div>
                            <ul class="sab-nav">
                                <li><span class="plus"></span><a class="sub-p" href="#">イベント詳細ページ</a></li>
                                <li class="grandchild">
                                    <span class="plus"></span><a class="sub-p" href="#">イベントストーリー</a>
                                    <ul>
                                        <li>
                                            <span class="minus"></span><a class="grandchild-p" href="#">イベントストーリー詳細</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="main-navi parent">
                            <h3><a class="main-navi-link" href="#">パーソナルプログラム</a></h3>
                            <div><span></span></div>
                            <ul class="sab-nav">
                                <li class="grandchild">
                                    <span class="plus"></span><a class="sub-p" href="#">ボディセラピー</a>
                                    <ul>
                                        <li>
                                            <span class="minus"></span><a class="grandchild-p" href="#">ボディリコネクションセラピー</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><span class="plus"></span><a class="sub-p" href="#">チャネリング ダイアローグ（対話）</a></li>
                                <li><span class="plus"></span><a class="sub-p" href="#">イベント/ワークショップ</a></li>
                            </ul>
                        </li>
                        <li class="main-navi parent">
                            <h3><a class="main-navi-link" href="#">ワンズヒーリングハウスについて</a></h3>
                            <div><span></span></div>
                            <ul class="sab-nav">
                                <li class="grandchild">
                                    <span class="plus"></span><a class="sub-p" href="#">チャネリングについて</a>
                                    <ul>
                                        <li>
                                            <span class="minus"></span><a class="grandchild-p" href="#">チャネリングの活用方法</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="grandchild">
                                    <span class="plus"></span><a class="sub-p" href="#">WANDS アソシエーション</a>
                                    <ul>
                                        <li>
                                            <span class="minus"></span><a class="grandchild-p" href="#">大天使ミハエルは語る</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </div>
                    <li class="sp main-navi">
                        <h3><a class="main-navi-link" href="#">お客様の声</a></h3>
                    </li>
                    <li class="sp main-navi">
                        <h3><a class="main-navi-link" href="#">Q&A</a></h3>
                    </li>
                    <li class="sp main-navi">
                        <h3><a class="main-navi-link" href="#">ご予約・お問い合わせ</a></h3>
                    </li>
                    <li class="sp main-navi">
                        <h3><a class="main-navi-link" href="#">プライバシーポリシー</a></h3>
                    </li>
                    <li class="sp main-navi">
                        <h3><a class="main-navi-link" href="#">免責事項</a></h3>
                    </li>
                    <li class="sp main-navi">
                        <h3><a class="main-navi-link" href="#">サイトのご利用について</a></h3>
                    </li>
                    <li class="sp main-navi">
                        <h3><a class="main-navi-link" href="#">サイトマップ</a></h3>
                    </li>
                    <div class="footer-right">
                        <li class="pc main-navi">
                            <h3><a class="main-navi-link" href="#">お客様の声</a></h3>
                            <h3><a class="main-navi-link" href="#">Q&A</a></h3>
                            <h3><a class="main-navi-link" href="#">ご予約・お問い合わせ</a></h3>
                            <h3><a class="main-navi-link" href="#">プライバシーポリシー</a></h3>
                            <h3><a class="main-navi-link" href="#">免責事項</a></h3>
                            <h3><a class="main-navi-link" href="#">サイトのご利用について</a></h3>
                            <h3><a class="main-navi-link" href="#">サイトマップ</a></h3>
                        </li>
                    </div>
                </ul>
            </div>
            
        </div>
        <p class="copyright">Copyright ©  Wands Healing House. All rights reserved</p>
    </div>
</footer>
    <script src="<?php echo get_template_directory_uri(); ?>/common/js/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".swiper", {
        loop: true,
        effect: "fade", // フェード切り替え
        // 自動再生
        autoplay: {
            delay: 4000, // 4秒後に次のスライドへ
            disableOnInteraction: false, // ユーザーが操作しても自動再生を継続
        },
        speed: 2000, // 2秒かけてフェード
        });
    </script>
<!-- 共通js -->
<script src="<?php echo get_template_directory_uri(); ?>/common/js/common.js"></script>
<?php wp_footer(); ?>
</body>
</html>