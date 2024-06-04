<?php
/*
Template Name: policy
*/
?>
<?php get_header(); ?>
<main>
<div id="term-of-site">
	<div class="top-visual-area">
		<div class="img">
			<picture class="">
				<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/term-of-site/main-visual_sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/about-us/main-visual_sp.jpg 2x">
				<source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/term-of-site/main-visual_pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/about-us/main-visual_pc.jpg 2x">
				<img src="<?php echo get_template_directory_uri(); ?>/images/term-of-site/main-visual_pc.jpg" alt="トップ背景画像">
			</picture>
		</div>
	</div>
	<div class="breadcrumbs-area">
		<ul class="breadcrumbs-list">
			<li class="link"><a href="<?php echo esc_url( home_url( '/') ); ?>">トップ</a></li>
			<li>サイトのご利用について</li>
		</ul>
	</div>
	<div class="lead-area">
		<div class="ttl-wrap">
			<h4 class="en">Term of site</h4>
			<h3 class="jp">サイトのご利用について</h3>
		</div>
		<p class="lead-sentence">ワンズ ヒーリング ハウスでは皆様に快適にウェブサイトをご利用できますよう心がけております。<br>ウェブサイトのご利用にあたって下記の内容をご一読いただきますようお願いいたします。<br>なお、ウェブサイトの掲載内容につきましては、予告なく変更することがございますのでご了承願います。</p>
	</div>
	<div class="contents-area">
		
	</div>
</div>
</main>
<?php get_footer(); ?>


