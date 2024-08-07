<?php
/*
Template Name: front-page
*/
?>
<?php get_header(); ?>
    <main>
        <div class="attachment">
        </div>
            <section id="fv">
                <div class="fv-wrap">
                    <div class="fv-text-wrap">
                        <h1><span>Channeling & Healing House</span><br>チャネリング＆<br>ヒーリングの家</h1>
                        <h2>チャネリング体験から始まる新しい<br>ヒーリングの世界へ</h2>
                        <p>ワンズヒーリングハウスは、<br class="br-se">都会の騒がしさを忘れる静寂な空間、<br class="br-se">チャネラー・ミハエルノブコの家。<br>
                        大天使、精霊など多くの高次元存在たちが織りなす<br class="br-se">洗練された言葉は、新しい癒しの扉を開きます。</p>
                    </div>
                    <div class="swiper-wrap">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/top_slide01.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/top_slide02.jpg" alt=""> 
                                </div>
                                <div class="swiper-slide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/top/top_slide03.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="event-wrap">
            <div class="event-program-wrap">
                    <div class="ttl-wrap">
                        <span class="en-ttl">event</span>
                        <h2 class="contents-ttl">イベント案内</h2>
                        <p class="lead">ワーズヒーリングハウスでは、様々なイベントや<br>
                            ワークショップを開催しています。<br>
                            お気軽にご参加ください。</p>
                        <div class="button-wrap">
                            <a href="<?php echo esc_url( home_url('event-program') ); ?>" class="button">read more</a>
                        </div>
                    </div>
                    <ul class="contents-wrap">
                        <?php $args = array(
                                'post_type' => 'event-program',
                                'post_status' => 'publish',// 公開済の投稿を指定
                                'paged' => $paged, 
                                'posts_per_page' => 2// 投稿件数の指定
                                );
                                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                                $the_query = new WP_Query($args);
                                if($the_query->have_posts()):?>
                        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" class="content-wrap content01-wrap">
                                <div class="event-img">
                                    <?php
                                    // プロフィールページで設定した画像を取得
                                    $profileImage = get_field('main-img');
                                    $size = 'large';
                                    // medium, large, fullなども指定可能
                                    if( $profileImage ) {
                                        echo wp_get_attachment_image( $profileImage, $size );
                                    }?>
                                </div>
                                <div class="event-text-button-wrap">
                                    <div class="text-wrap">
                                        <p><span><?php the_title(); ?></span><br><?php echo get_field('date'); ?><br><?php echo get_field('sentence'); ?></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else: ?>
                        <!-- 投稿が無い場合の処理 -->
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="report-wrap">
                    <div class="left">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/top/eventStory-img.jpg" alt="">
                    </div>
                    <div class="right">
                        <div class="text-wrap">
                            <h3>イベントストーリー</h3>
                            <p>終了したイベントについての報告を掲載しています。</p>
                        </div>
                        <div class="button-wrap">
                            <a href="<?php echo esc_url( home_url('event-story') ); ?>" class="">read more</a>
                        </div>
                    </div>
                </div>
            </section>




            <section id="menu-wrap">
                <div class="ttl-wrap">
                    <span class="en-ttl">menu</span>
                    <h2 class="contents-ttl">パーソナルプログラム</h2>
                </div>

                <div class="content-wrap">
                    <div class="content-wrap-a">
                        <div class="menu-img-wrap-a">
                            <div class="bg-wrap">
                                <img class="bg" src="<?php echo get_template_directory_uri(); ?>/images/top/menu-bg-gre.jpg" alt="">
                            </div>
                            <div class="menu-img-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/top/menu-img02.jpg" alt="">
                            </div>
                        </div>
                        <div class="text-button-wrap">
                            <div class="text-wrap">
                                <div class="content-ttl-wrap">
                                    <h3>チャネリングダイアローグ<br class="br01">（対話）
                                    個人セッション</h3>
                                    <p>お客様とチャネラーが対面(1対1)で大天使ミハエルからのメッセージをお伝えいたします。<br>
                                        遠隔(ZOOM)でのセッションも承っております。</p>
                                </div>
                            </div>
                            <div class="button-wrap">
                                <a href="<?php echo esc_url( home_url('channeling-dialogue') ); ?>" class="button">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="content-wrap">
                    <div class="content-wrap-b">
                        <div class="menu-img-wrap-b">
                            <div class="menu-img-b">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/top/menu-img01.jpg" alt="">
                            </div>
                            <div class="bg-wrap">
                                <img class="bg" src="<?php echo get_template_directory_uri(); ?>/images/top/menu-bg-pin.jpg" alt="">
                            </div>
                        </div>
                        <div class="text-button-wrap">
                            <div class="text-wrap">
                                <div class="content-ttl-wrap">
                                    <h3>ボディセラピー&チャネリング</h3>
                                    <p>身体と心と魂（スピリット）がひとつに繋がるためのセラピーです。</p>
                                </div>
                            </div>
                            <div class="button-wrap">
                                <a href="<?php echo esc_url( home_url('body-therapy') ); ?>" class="button">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>





            <section id="about-wrap">
                <div class="tti-wrap">
                    <span class="en-ttl">about</span>
                    <h2 class="contents-ttl">ワンズ ヒーリング ハウスについて</h2>
                    <p class="lead">ワンズ ヒーリング ハウスは、東京・駒込にある<br>
                        高感度な皆様に向けた新たなコンプレックス（複合）型のヒーリングハウスです。</p>
                </div>
                <div class="contents-wrap">
                    <div class="content-wrap content01-wrap">
                        <div class="about-img-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/top/about-img01.jpg" alt="">
                        </div>
                        <div class="text-button-wrap">
                            <div class="text-wrap">
                                <h3 class="about-content-ttl">WANDS アソシエーション</h3>
                                <p class="">ワンズ ヒーリング ハウス代表・ミハエル ノブコは、<br>
                                    ヒーリングセラピストであり、<br>
                                    大天使ミハエル オフィシャルチャネラーです。</p>
                            </div>
                            <div class="button-wrap">
                                <a href="<?php echo esc_url( home_url('wands-association') ); ?>" class="button">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="content-wrap content02-wrap">
                        <div class="about-img-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/top/about-img02.jpg" alt="">
                        </div>
                        <div class="text-button-wrap">
                            <div class="text-wrap">
                                <h3 class="about-content-ttl">チャネリングについて</h3>
                                <p class="">ミハエルは、深い愛のメッセージを私たちに伝え、<br>
                                    「自分を愛すること」の大切さを教えてくれる大天使です。</p>
                            </div>
                            <div class="button-wrap">
                                <a href="<?php echo esc_url( home_url('about-channeling') ); ?>" class="button">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="content-wrap content03-wrap">
                        <div class="about-img-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/top/about-img03.jpg" alt="">
                        </div>
                        <div class="text-button-wrap">
                            <div class="text-wrap">
                                <h3 class="about-content-ttl">ワンズ ヒーリング ハウス<br>
                                    イメージ動画</h3>
                                <p class="">ワンズヒーリングハウスの様子を動画でご覧いただけます。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        
    </main>
    <?php get_footer(); ?>