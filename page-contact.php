<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>
<main>
<div id="contact">
	<div class="top-visual-area">
		<div class="img">
			<picture class="">
				<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/contact/main_visual-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/contact/main_visual-sp.jpg 2x">
				<source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/contact/main_visual-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/contact/main_visual-pc.jpg 2x">
				<img src="<?php echo get_template_directory_uri(); ?>/images/contact/main_visual-pc.jpg" alt="トップ背景画像">
			</picture>
		</div>
	</div>
	<div class="breadcrumbs-area">
		<ul class="breadcrumbs-list">
			<li class="link"><a href="<?php echo esc_url( home_url( '/') ); ?>">トップ</a></li>
			<li>パーソナルプログラム</li>
		</ul>
	</div>
	<div class="lead-area">
		<div class="ttl-wrap">
			<h4 class="en">Personal Program</h4>
			<h3 class="jp">パーソナルプログラム</h3>
		</div>
		<p class="lead-sentence">都会の喧騒の中にある静寂な空間。そしてチャネラーが住む家。多くの高次元存在が降り立つヒーリングハウス。</p>
	</div>
	<div class="contents-area">
	<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php else: ?>
    <!-- 投稿が無い場合の処理 -->
    <?php endif; ?>  
	</div>
</div>
</main>
<?php get_footer(); ?>


