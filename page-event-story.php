<?php
/*
Template Name: event-story
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
            <ul class="story-boxes">
            <!-- -----------------サブループ--------------------- -->
            <?php $args = array(
            'post_type' => 'event-story-category',
            'post_status' => 'publish',// 公開済の投稿を指定
            'paged' => $paged, 
            'posts_per_page' => -1// 投稿件数の指定
            );
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $the_query = new WP_Query($args);
            if($the_query->have_posts()):?>
            <?php while ($the_query->have_posts()): $the_query->the_post();?>
            <li class="">
                    <h4><?php the_title(); ?></h4>

                    <div class="info-wrap">
                        <div class="img-wrap">
                        <?php
                            // プロフィールページで設定した画像を取得
                            $profileImage = get_field('event-img');
                            $size = 'large';
                            // medium, large, fullなども指定可能

                            if( $profileImage ) {
                                echo wp_get_attachment_image( $profileImage, $size );
                            }?>
                        </div>
                        <div class="text-wrap">
                            <p><?php the_field('detail-sentence'); ?></p>
                            <div class="about-detail-wrap">
                                <div class="sub-info">
                                    <h5><?php the_field('sub-event-ttl'); ?></h5>
                                    <p class=""><?php the_field('sub-event-detail'); ?></p>
                                </div>
                                <!-- -----------------サブ サブループ--------------------- -->
                                <?php
                                $terms = get_the_terms($post->ID, 'story-tax'); // ① カスタムタクソノミーのスラッグ
                                foreach($terms as $term) {
                                    $term_slug = $term->slug;
                                }
                                $parm = array(
                                    'post__not_in' => array($post->ID),
                                    'post_type' => 'event-story', // カスタム投稿タイプのスラッグ
                                    'posts_per_page' => 1, //  表示件数

                                    'tax_query' => array(
                                    array(
                                        'taxonomy' => 'story-tax', // カスタムタクソノミーのスラッグ
                                        'field' => 'slug',
                                        'terms' => $term_slug
                                    )
                                    )
                                );
                                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                                $sub_query = new WP_Query($parm);?>
                                <?php if($sub_query->have_posts()):?>
                                <?php while ($sub_query->have_posts()): $sub_query->the_post(); ?>
                                <a class="detail-link" href="<?php the_permalink(); ?>">
                                    <?php
                                        // プロフィールページで設定した画像を取得
                                        $profileImage = get_field('story-image');
                                        $size = 'small';
                                        // medium, large, fullなども指定可能
                                        if( $profileImage ) {
                                            echo wp_get_attachment_image( $profileImage, $size );
                                        }?>
                                    <div class="text-wrap">
                                        <h6><?php $title = the_title(); ?></h6>
                                        <p><?php the_field('story-detail'); ?></p>
                                    </div>
                                </a>
                                <?php endwhile; ?>
                                <?php else: ?>
                                <?php endif; ?>
                                <!-- ------------------------------------- -->
                                <div class="button-wrap">
                                    <a href="<?php echo esc_url( home_url( '/') ); ?>">イベントストーリー一覧はこちら</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <div class="contact-button">
                        <a href="/">ご質問・お問い合わせ</a>
                </div>
            </ul>
                
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