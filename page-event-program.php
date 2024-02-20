<?php
/*
Template Name: archive-event-program
*/
?>
<?php get_header(); ?>
<main>
<div id="event-program">
	<div class="top-visual-area">
		<div class="img">
			<picture class="">
				<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/event-program/main-visual_sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/event-program/main-visual_sp.jpg 2x">
				<source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/event-program/main-visual_pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/event-program/main-visual_pc.jpg 2x">
				<img src="<?php echo get_template_directory_uri(); ?>/images/event-program/main-visual_pc.jpg" alt="トップ背景画像">
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
				<li>
					<p class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/event-program/img01.jpg" alt=""></p>
					<div class="right">
						<div class="text-wrap">
							<p class="ttl">お申し込み受付中</p>
							<p class="date">12月3日(日)</p>
							<p class="sentence"><span class="sub-ttl">第３回スターシードお茶会のご案内</span><br>
							12月3日（日）第3回スターシードお茶会（無料）<br>@wands healing houseを行います。<br>
							開催日時・場所 日程：12月3日（日）14:00-17:00（入退室自由：何時に来て何時に帰ってもOKです） <br>
							場所：ワンズヒーリングハウス（東京都北区） （最寄駅・・・</p>
						</div>
						<div class="button-wrap"><a href="<?php echo esc_url( home_url( '/') ); ?>">read more</a></div>
					</div>
				</li>
				<li>
					<p class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/event-program/img02.jpg" alt=""></p>
					<div class="right">
						<div class="text-wrap">
							<p class="ttl">満席となりました</p>
							<p class="date">12月2日(土)</p>
							<p class="sentence"><span class="sub-ttl">第３回スターシードお茶会のご案内</span><br>
							12月3日（日）第3回スターシードお茶会（無料）<br>@wands healing houseを行います。<br>
							開催日時・場所 日程：12月3日（日）14:00-17:00（入退室自由：何時に来て何時に帰ってもOKです） <br>
							場所：ワンズヒーリングハウス（東京都北区） （最寄駅・・・</p>
						</div>
						<div class="button-wrap"><a href="<?php echo esc_url( home_url( '/') ); ?>">read more</a></div>
					</div>
				</li>
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


