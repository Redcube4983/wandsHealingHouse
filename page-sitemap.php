<?php
/*
Template Name: sitemap
*/
?>
<?php get_header(); ?>
<main>
<div id="sitemap">
	<div class="top-visual-area">
		<div class="img">
			<picture class="">
				<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/sitemap/main_visual-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/sitemap/main_visual-sp.jpg 2x">
				<source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/sitemap/main_visual-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/sitemap/main_visual-pc.jpg 2x">
				<img src="<?php echo get_template_directory_uri(); ?>/images/sitemap/main_visual-pc.jpg" alt="トップ背景画像">
			</picture>
		</div>
	</div>
	<div class="breadcrumbs-area">
		<ul class="breadcrumbs-list">
			<li class="link"><a href="<?php echo esc_url( home_url( '/') ); ?>">トップ</a></li>
			<li>サイトマップ</li>
		</ul>
	</div>
	<div class="lead-area">
		<div class="ttl-wrap">
			<h4 class="en">Sitemap</h4>
			<h3 class="jp">サイトマップ</h3>
		</div>
	</div>
	<div class="contents-area">
		<div class="sitemap-list">
			<h2><a href="<?php echo esc_url( home_url( '/') ); ?>">トップ</a></h2>
			<ul class="sitemap-column">
				<li>
					<h2><a href="<?php echo esc_url( home_url('event-program') ); ?>">イベントプログラム</a></h2>
					<ul>
						<li class="directory third-directory"><a href="<?php echo esc_url( home_url('#') ); ?>">イベント詳細ページ</a></li>
						<li class="directory third-directory"><a href="<?php echo esc_url( home_url('event-story') ); ?>">イベントストーリー</a></li>
						<li class="directory fourth-directory"><a href="<?php echo esc_url( home_url('#') ); ?>">イベントストーリー一覧</a></li>
						<li class="directory fifth-directory"><a href="<?php echo esc_url( home_url('#') ); ?>">イベントストーリー詳細</a></li>
					</ul>
				</li>
				<li>
					<h2><a href="<?php echo esc_url( home_url('personal-program') ); ?>">パーソナルプログラム</a></h2>
					<ul>
						<li class="directory third-directory"><a href="<?php echo esc_url( home_url('#') ); ?>">チャネリングダイアローグ</a></li>
						<li class="directory fourth-directory"><a href="<?php echo esc_url( home_url('#') ); ?>">ボディセラピー＆チャネリング</a></li>
						<li class="directory third-directory"><a href="<?php echo esc_url( home_url('#') ); ?>">ボディリコネクションセラピー</a></li>
					</ul>
				</li>
				<li>
					<h2><a href="<?php echo esc_url( home_url('about-us') ); ?>">ワンズヒーリングハウスについて</a></h2>
					<ul>
						<li class="directory third-directory"><a href="<?php echo esc_url( home_url('about-channeling') ); ?>">チャネリングについて</a></li>
						<li class="directory fourth-directory"><a href="<?php echo esc_url( home_url('channeling-message') ); ?>">チャネリングの活用方法</a></li>
						<li class="directory third-directory"><a href="<?php echo esc_url( home_url('wands-association') ); ?>">WANDSアソシエーション</a></li>
					</ul>
				</li>
			</ul>
			<ul class="sitemap-wrap">
				<li><h2><a href="<?php echo esc_url( home_url('voice') ); ?>">お客様の声</a></h2></li>
				<li><h2><a href="<?php echo esc_url( home_url('surrounding-info') ); ?>">周辺情報</a></h2></li>
				<li><h2><a href="<?php echo esc_url( home_url('faq') ); ?>">FAQ</a></h2></li>
				<li><h2><a href="<?php echo esc_url( home_url('contact') ); ?>">ご予約・お問い合わせ</a></h2></li>
				<li><h2><a href="<?php echo esc_url( home_url('policy') ); ?>">プライバシーポリシー</a></h2></li>
				<li><h2><a href="<?php echo esc_url( home_url('term-of-use') ); ?>">サイトのご利用について</a></h2></li>
				<li><h2><a href="<?php echo esc_url( home_url('sitemap') ); ?>">サイトマップ</a></h2></li>
			</ul>
		</div>
	</div>
</div>
</main>
<?php get_footer(); ?>

