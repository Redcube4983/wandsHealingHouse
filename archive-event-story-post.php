<!-- <?php
/*
Template Name: event-story-post
*/
?>
<?php get_header(); ?>
<main>
	<div id="event-story">
        <div class="visual-lead-area">
            <div class="lead-area">
                <h4 class="en"></h4>
                <h3 class="jp">イベントストーリー詳細</h3>
                <p class="lead-sentence">コンプレックス（複合）型のワーズヒーリングハウスでは、定期的に多彩なイベントを企画しています。</p>
            </div>
        </div>
        <div class="breadcrumbs-area">
            <ul class="breadcrumbs-list">
                <li class="link"><a href="</?php echo esc_url( home_url( '/') ); ?>">トップ</a></li>
                <li><a href="</?php echo esc_url( home_url('event-program') ); ?>">イベントプログラム</a></li>
                <li>イベントストーリー</li>
            </ul>
        </div>
    </div>
</main>
<?php get_footer(); ?> -->

<?php
/*
Template Name: event-story-post
*/
?>
<?php get_header(); ?>
<main>
	<div id="event-story">
        <div class="visual-lead-area">
            <div class="lead-area">
                <h4 class="en">Event Story</h4>
                <h3 class="jp">イベントストーリー</h3>
                <p class="lead-sentence">コンプレックス（複合）型のワーズヒーリングハウスでは、定期的に多彩なイベントを企画しています。</p>
            </div>
        </div>
        <div class="breadcrumbs-area">
            <ul class="breadcrumbs-list">
                <li class="link"><a href="<?php echo esc_url( home_url( '/') ); ?>">トップ</a></li>
                <li><a href="<?php echo esc_url( home_url('event-program') ); ?>">イベントプログラム</a></li>
                <li>イベントストーリー</li>
            </ul>
        </div>
        <div class="contents-area">
            <?php $args = array(
					'post_type' => array('post','nearby_gourmet','leisure_culture','tribe_events'),
					'post_status' => 'publish',// 公開済の投稿を指定
					'orderby' => 'date',
					'paged' => $paged, 
					'posts_per_page' => -1 // 投稿件数の指定
					);
			  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		      $the_query = new WP_Query($args);
		      if($the_query->have_posts()):?>
            <ul class="story-boxes">
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
			<?php 
			$cat = get_the_category();
			$cat = $cat[0];
			?>
                <li id="post-<?php the_ID(); ?>" class="">
                    <h4><?php the_field('event-ttl'); ?></h4>
                    <div class="info-wrap">
                        <div class="img-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/event-program/story-img01.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p><?php the_field('detail-sentence'); ?></p>
                            <div class="about-detail-wrap">
                                <div class="sub-info">
                                    <h5>ミハエルのオープンチャネリング ダイアローグ(対話)<br>カフェスタイル</h5>
                                    <p class="">5,000円以上の<a class="sentence-link" href="<?php echo esc_url( home_url( 'event-program') ); ?>">ドネーション</a>（寄付・支援金）制</p>
                                </div>
                                <div class="detail-link">
                                    <picture class="">
                                        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/event-program/story-img00_sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/event-program/story-img00_sp.jpg 2x">
                                        <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/event-program/story-img00_pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/event-program/story-img00_pc.jpg 2x">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/event-program/story-img00_pc.jpg" alt="">
                                    </picture>
                                    <div class="text-wrap">
                                        <h6>イベントストーリー詳細</h6>
                                        <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
                                    </div>
                                </div>
                                <div class="button-wrap">
                                    <a href="<?php echo esc_url( home_url( '/') ); ?>">イベントストーリー一覧はこちら</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php else: ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            <div class="contact-button">
                <a href="ご質問・お問い合わせ"></a>
            </div>
            <div class="check-box">
                <p>今後のイベントご案内はこのページの他、Facebook, Instagram, <br>公式ラインでもお知らせいたします</p>
            </div>
            <div class="check-box02">
                <p class="ttl">イベントで行う「チャネリング体験」について</p>
                <p class="sent">コラボレーションイベントでの「チャネリング体験」では、ゲストのエネルギーをミハエルが感知し、その方に向けたメッセージを個別にお届けいたします（約5分前後）。またご家族やお仕事、恋愛などに関するご相談がございましたら、ミハエルとの深い対話を楽しむために、<a class="sentence-link" href="<?php echo esc_url( home_url( '/') ); ?>">チャネリング ダイアローグ（45分の個人セッション）</a>のご予約をお勧めいたします。どうぞお気軽にお問い合わせください。</p>
            </div>
            <div class="consider-event-area">
                <div class="wrap">
                    <h4>イベントをご検討中の方へ</h4>
                    <ul class="img-wrap">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/event-program/story-img12.jpg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/event-program/story-img13.jpg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/event-program/story-img14.jpg" alt=""></li>
                    </ul>
                    <p>ワンズヒーリングハウスでは、チャネリングとのコラボレーションイベントの企画を募集しています。<br>（ワンズヒーリングハウスでは、レンタルスペースや貸会議室のように、貸し出しはいたしておりません）１階フロアだけでなく、和室、２階のライブラリースペース、ガーデンなどを併用し、お客様が回遊できるようなイベントも可能です。スピリチュアルイベントなどをご検討中の方、ワンズヒーリングハウスで何かやってみたい、と思われる方は、ぜひお気軽にお問い合わせください。</p>
                    <div class="contact-button">
                        <a href="/">ご質問・お問い合わせ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>






