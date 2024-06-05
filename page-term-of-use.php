<?php
/*
Template Name: term-of-use
*/
?>
<?php get_header(); ?>
<main>
<div id="term-of-use">
	<div class="top-visual-area">
		<div class="img">
			<picture class="">
				<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/term-of-use/main_visual-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/term-of-use/main_visual-sp.jpg 2x">
				<source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/term-of-use/main_visual-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/term-of-use/main_visual-pc.jpg 2x">
				<img src="<?php echo get_template_directory_uri(); ?>/images/term-of-use/main_visual-pc.jpg" alt="トップ背景画像">
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
		<ul class="term-of-use-list">
			<li>
				<h3>ご利用環境について</h3>
				<p>当ウェブサイトは以下の環境での閲覧を推奨いたします。</p>
				<div class="device-wrp">
					<div class="box pc-box">
						<b>PC</b>
						<div class="os-box">
							<span>推奨OS</span>
							<ul>
								<li>Windows10 / Windows11</li>
								<li>MacOS X / MacOS 11/ MacOS 12</li>
							</ul>
						</div>
						<div class="browser-box">
							<span>推奨ブラウザ</span>
							<ul>
								<li>Google Chrome（最新版）</li>
								<li>Firefox（最新版）</li>
								<li>Safari（最新版）</li>
								<li>Microsoft Edge（最新版）</li>
							</ul>
						</div>
						<span class="note">※他のブラウザでご覧になった際、一部コンテンツが正しく表示されない場合がございますので、あらかじめご了承ください。</span>
					</div>
					<div class="box sp-box">
						<b>スマートホン</b>
						<div class="os-box">
							<span>推奨OS</span>
							<ul>
								<li>iOS16 以上</li>
								<li>Android13 以上</li>
							</ul>
						</div>
						<div class="browser-box">
							<span>推奨ブラウザ</span>
							<ul>
								<li>iOS：Safari（最新版）</li>
								<li>Google Chrome（最新版）</li>
								<li>Firefox for Mobile（最新版）</li>
								<li>Android：Chrome for Android（最新版）</li>
								<li>Firefox for Mobile（最新版）</li>
							</ul>
						</div>
						<span class="note">※他のブラウザでご覧になった際、一部コンテンツが正しく表示されない場合がございますので、あらかじめご了承ください。</span>
					</div>
				</div>
			</li>
			<li>
				<h3>JavaScriptについて</h3>
				<p>当ウェブサイトは、JavaScriptを使用しています。JavaScriptを無効にされている場合はページが正しく表示されない場合がございます。<br>当ウェブサイトご利用の際には、JavaScriptを有効に設定していただきますようお願いします。</p>
			</li>
			<li>
				<h3>プラグインについて</h3>
				<p>一部のコンテンツでは、以下のプラグインが必要です。インストールされていない場合は、リンクをクリックして最新のバージョンをダウンロードしてください。<br>
				<a href="https://get.adobe.com/jp/reader/">Adobe® Reader®</a></p>
			</li>
			<li>
				<h3>個人情報の取扱いについて</h3>
				<p>個人情報の取り扱いについては、<a href="<?php echo esc_url( home_url('policy') ); ?>">プライバシーポリシー</a>のページをご覧ください。</p>
			</li>
		</ul>
	</div>
</div>
</main>
<?php get_footer(); ?>


