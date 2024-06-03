<?php
/*
Template Name: site-map
*/
?>
<?php get_header(); ?>
<main>
<div id="site-map">
	<div class="top-visual-area">
		<div class="img">
			<picture class="">
				<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/about-us/main-visual_sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/about-us/main-visual_sp.jpg 2x">
				<source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/about-us/main-visual_pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/about-us/main-visual_pc.jpg 2x">
				<img src="<?php echo get_template_directory_uri(); ?>/images/about-us/main-visual_pc.jpg" alt="トップ背景画像">
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
	</div>
</div>
</main>
<?php get_footer(); ?>


