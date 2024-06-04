<?php
/*
Template Name: voice
*/
?>
<?php get_header(); ?>
<main>
<div id="voice">
	<div class="top-visual-area">
		<div class="img">
			<picture class="">
				<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/voice/main_visual-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/voice/main_visual-sp.jpg 2x">
				<source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/voice/main_visual-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/voice/main_visual-pc.jpg 2x">
				<img src="<?php echo get_template_directory_uri(); ?>/images/voice/main_visual-pc.jpg" alt="トップ背景画像">
			</picture>
		</div>
	</div>
	<div class="breadcrumbs-area">
		<ul class="breadcrumbs-list">
			<li class="link"><a href="<?php echo esc_url( home_url( '/') ); ?>">トップ</a></li>
			<li>お客様の声</li>
		</ul>
	</div>
	<div class="lead-area">
		<div class="ttl-wrap">
			<h4 class="en">Voice</h4>
			<h3 class="jp">お客様の声</h3>
		</div>
		<p class="lead-sentence">施術を受けてくださったお客様から、数々の嬉しいコメントが届きました。</p>
	</div>
	<div class="contents-area">
		<ul class="voice-list">
			<li>
				<div class="box box-left">
					<span class="name">komaponさん</span>
					<p class="ttl">“ミハエルの言葉から、<br class="sp">新たな気づきを得ることができる”</p>
					<div class="detail-text">
						<div class="txt-show">
							<p>ハウスの外観も温かみがあり、中に入るとさらに柔らかい空気を感じます。<br>nobukoさんの優しい雰囲気に癒されながら、チャネリングが始まります。…</p>
						</div>
						
						<div class="txt-hide">
							<p>大天使ミハエルからの言葉は、今の自分を客観的に見たもので、新たな気づきを得ることができます。<br>また、その時にはピンと来なかった言葉が、後日起こった出来事の中で「このことだったんだな」と気付かされることがいくつもありました。<br>大天使ミハエルから瞑想の必要性を話され、内省をするようになってからは物事の見方や捉え方、人との関わり方にも変化が起こっています。<br>自分の気づきを得るためにも、定期的に伺いたいと思っています。</p>
							<a class="link" href="#">個人チャネリングセッション・ミハエルのオープンチャネリング カフェスタイル</a>
						</div>
						
						<button class="more"></button>
					</div>
				</div>
			</li>
			<li>
				<div class="box box-right">
					<span class="name">komaponさん</span>
					<p class="ttl">“ミハエルの言葉から、<br class="sp">新たな気づきを得ることができる”</p>
					<div class="detail-text">
						<div class="txt-show">
							<p>ハウスの外観も温かみがあり、中に入るとさらに柔らかい空気を感じます。<br>nobukoさんの優しい雰囲気に癒されながら、チャネリングが始まります。…</p>
						</div>
						
						<div class="txt-hide">
							<p>大天使ミハエルからの言葉は、今の自分を客観的に見たもので、新たな気づきを得ることができます。<br>また、その時にはピンと来なかった言葉が、後日起こった出来事の中で「このことだったんだな」と気付かされることがいくつもありました。<br>大天使ミハエルから瞑想の必要性を話され、内省をするようになってからは物事の見方や捉え方、人との関わり方にも変化が起こっています。<br>自分の気づきを得るためにも、定期的に伺いたいと思っています。</p>
							<a class="link" href="#">個人チャネリングセッション・ミハエルのオープンチャネリング カフェスタイル</a>
						</div>
						
						<button class="more"></button>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>
</main>
<?php get_footer(); ?>


