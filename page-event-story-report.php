<?php
/*
Template Name: event-story-report
*/
?>
<?php get_header(); ?>
<main>
	<div id="event-story-report">
        
        <div class="visual-lead-area">
            <div class="lead-area">
                <h4 class="en">Event Story</h4>
                <h3 class="jp">レポート一覧</h3>
                <!-- <p class="lead-sentence">コンプレックス（複合）型のワーズヒーリングハウスでは、定期的に多なイベントを企画しています。</p> -->
            </div>
        </div>
        <div class="breadcrumbs-area">
            <ul class="breadcrumbs-list">
                <li class="link"><a href="<?php echo esc_url( home_url( '/') ); ?>">トップ</a></li>
                <li><a href="<?php echo esc_url( home_url('event-story') ); ?>">イベントストーリー</a></li>
                <li>レポート一覧</li>
            </ul>
        </div>
        <div class="contents-area">
            
        <ul>
            <!-- -----------------サブ サブループ--------------------- -->
            <?php
            $taxonomies = 'story-tax'; // タクソノミー（カテゴリー）スラッグを指定
            $args = array(
                'hide_empty' => false, // 空のタームを出力しない場合はtrue
            );
            $terms = get_terms( $taxonomies , $args );

            // ターム（カテゴリー）別に記事を出力する
            foreach ($terms as $term) :
                $args = array(
                    'post_type'     => 'event-story',
                    'taxonomy'      => $taxonomies,
                    'term'          => $term->slug,
                    'posts_per_page'=> -1 // 最新5記事。数を指定しない場合は-1を指定
                );
                $trip_posts = get_posts( $args );
                if ( $trip_posts ) {
                // 記事がある場合
                    // ターム名（カテゴリー名）
                    echo '<h2>'.$term->name.'</h2>';

                    foreach ( $trip_posts as $post ) :
                        setup_postdata( $post ); ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <div class="category-wrap">
                            <h3><?php $title = the_title(); ?></h3>
                            <div class="img-wrap">
                                    <?php
                                    // プロフィールページで設定した画像を取得
                                    $profileImage = get_field('story-image');
                                    $size = 'small';
                                    // medium, large, fullなども指定可能
                                    if( $profileImage ) {
                                        echo wp_get_attachment_image( $profileImage, $size );
                                    }?>
                                </div>
                                <div class="text-wrap">
                                <p><?php the_field('story-detail'); ?></p>
                            </div>
                        </div>
                    </a>
                </li>
           
            <?php
        endforeach;

                } else {
                
                }

            endforeach;

            wp_reset_postdata();
            ?>
            <!-- ------------------------------------- -->
        </ul>
        </div>
    </div>
</main>
<?php get_footer(); ?>