<?php
/*
Template Name: event-program
*/
?>
<?php get_header(); ?>
<main>
<div id="event-program">
	<div class="top-visual-area">
		<div class="img">
			<picture class="">
				<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/event-program/main_visual-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/event-program/main_visual-sp.jpg 2x">
				<source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/event-program/main_visual-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/event-program/main_visual-pc.jpg 2x">
				<img src="<?php echo get_template_directory_uri(); ?>/images/event-program/main_visual-pc.jpg" alt="トップ背景画像">
			</picture>
		</div>
	</div>
	<div class="breadcrumbs-area">
		<ul class="breadcrumbs-list">
			<li class="link"><a href="<?php echo esc_url( home_url( '/') ); ?>">トップ</a></li>
			<li>イベントプログラム</li>
		</ul>
	</div>
	<div class="lead-area">
		<div class="ttl-wrap">
			<h4 class="en">Event Program</h4>
			<h3 class="jp">イベントプログラム</h3>
		</div>
		<p class="lead-sentence">ワンズヒーリングハウスでは、癒しと愉しさに満ちた多彩なスピリチュアルイベントを開催しています。<br>
		イベントではチャネリングもご体験いただけます。お気軽にご参加ください。</p>
	</div>
	<div class="contents-area">
		<div class="event-article-area">
		
			<ul class="article-wrap">
			<?php $args = array(
            'post_type' => 'event-program',
            'post_status' => 'publish',// 公開済の投稿を指定
            'paged' => $paged, 
            'posts_per_page' => 3// 投稿件数の指定
            );
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $the_query = new WP_Query($args);
            if($the_query->have_posts()):?>
            <?php while ($the_query->have_posts()): $the_query->the_post();?>
				<li>
					<p class="img">
					<?php
					// プロフィールページで設定した画像を取得
					$profileImage = get_field('main-img');
					$size = 'large';
					// medium, large, fullなども指定可能
					if( $profileImage ) {
						echo wp_get_attachment_image( $profileImage, $size );
					}?>
					</p>
					<div class="right">
						<div class="text-wrap">
							<span class="ttl"><?php the_title(); ?></span>
							<span class="date"><?php the_field('date'); ?></span>
							<h3 class="sentence"><?php the_field('sentence'); ?></h3>
							<p class="sentence2"><?php the_field('sentence2'); ?></p>
						</div>
						<div class="button-wrap"><a href="<?php the_permalink(); ?>">read more</a></div>
					</div>
				</li>
				<?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
			</ul>
		</div>
		<div class="event-story-area">
			<div class="event-story-inner">
				<div class="text-wrap">
					<h3 class="ttl">イベントストーリー</h3>
					<p>イベントにご参加いただき、ありがとうございました。<br>開催を終了したイベントについてのレポートを掲載しています。<br>
					どうぞご覧ください。</p>
					<div class="button-wrap"><a href="<?php echo esc_url( home_url( 'event-story') ); ?>">read more</a></div>
				</div>
				<div class="img-wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/images/event-program/img03.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
</main>
<?php get_footer(); ?>


