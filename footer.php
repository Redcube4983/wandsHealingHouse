<footer>
    <div class="footer-wrap">
        <div class="footer-flbox">
            <div id="info-wrap">
                <a id="footer-site-logo" href="#">
                    <h2><img class="footer-site-logo" src="<?php echo get_template_directory_uri(); ?>/images/house_logo.png"  alt="">
                    </h2>
                </a>
                <div class="open-wrap">
                    <p><span>営業時間</span><br>11:00-18:00（最終受付時間）<br>定休日：水曜日</p>
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
                            <h3><a class="main-navi-link" href="">イベント案内</a></h3>
                            <div><span></span></div>
                            <ul class="sab-nav">
                                <li><span class="plus"></span><a href="＃">レポート</a></li>
                            </ul>
                        </li>
                        <li class="main-navi parent">
                            <h3><a class="main-navi-link" href="#">ワンズヒーリングハウスのメニュー</a></h3>
                            <div><span></span></div>
                            <ul class="sab-nav">
                                <li><span class="plus"></span><a href="#">ボディセラピー</a></li>
                                <li><span class="plus"></span><a href="#">チャネリングセッション</a></li>
                                <li><span class="plus"></span><a href="#">イベント/ワークショップ</a></li>
                            </ul>
                        </li>
                        <li class="main-navi parent">
                            <h3><a class="main-navi-link" href="#">ワンズヒーリングハウスについて</a></h3>
                            <div><span></span></div>
                            <ul class="sab-nav">
                                <li><span class="plus"></span><a href="#">大天使ミハエル</a></li>
                                <li><span class="plus"></span><a href="#">代表プロフィール</a></li>
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
    <script>
        $(function () {
        $(".slider")
            // 最初のスライドに"add-animation"のclassを付ける(data-slick-index="0"が最初のスライドを指す)
            .on("init", function () {
            $('.slick-slide[data-slick-index="0"]').addClass("add-animation");
            })
            // 通常のオプション
            .slick({
            autoplay: true, // 自動再生ON
            fade: true, // フェードON
            arrows: false, // 矢印OFF
            speed: 2000, // スライド、フェードアニメーションの速度1000ミリ秒
            autoplaySpeed: 4000, // 自動再生速度4000ミリ秒
            pauseOnFocus: false, // フォーカスで一時停止OFF
            pauseOnHover: false, // マウスホバーで一時停止OFF
            })
            .on({
            // スライドが移動する前に発生するイベント
            beforeChange: function (event, slick, currentSlide, nextSlide) {
                // 表示されているスライドに"add-animation"のclassをつける
                $(".slick-slide", this).eq(nextSlide).addClass("add-animation");
                // あとで"add-animation"のclassを消すための"remove-animation"classを付ける
                $(".slick-slide", this).eq(currentSlide).addClass("remove-animation");
            },
            // スライドが移動した後に発生するイベント
            afterChange: function () {
                // 表示していないスライドはアニメーションのclassを外す
                $(".remove-animation", this).removeClass(
                "remove-animation add-animation"
                );
            },
            });
        });
    </script>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/slick.min.js"></script>
<!-- 共通js -->
<script src="<?php echo get_template_directory_uri(); ?>/common/js/common.js"></script>
<?php wp_footer(); ?>
</body>
</html>