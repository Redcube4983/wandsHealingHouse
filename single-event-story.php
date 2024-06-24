<?php
/*
Template Name: event-program
*/
?>
<?php get_header(); ?>


<main>

<div id="single-area">
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
                <li><a href="<?php echo esc_url( home_url( '/event-program/') ); ?>">イベントプログラム</a></li>
                <li><?php the_field('sentence'); ?></li>
            </ul>
        </div>
    </div> 
<div id="page-visual">
        <div class="page-visual-inner">
        </div>
    </div>
    <section id="event-story-post" class="Scroll-bottom2">
    
        <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
    <!--------アーティクルスペース-------->
		<article>
        
            <div class="img-wrap">
                <?php
                // プロフィールページで設定した画像を取得
                $profileImage = get_field('story-image');
                $size = 'large';
                // medium, large, fullなども指定可能
                if( $profileImage ) {
                    echo wp_get_attachment_image( $profileImage, $size );
                }?>
            </div>
            <div class="text-wrap">
            <h1 class="single-title"><?php the_title(); ?></h1>
            <span class="date"><?php the_field('story-detail'); ?></span>
            </div>
			
		</article>
        <?php endwhile; ?>
        <?php else: ?>
        <!-- 投稿が無い場合の処理 -->
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>


