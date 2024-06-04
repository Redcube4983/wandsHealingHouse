<?php
/*
Template Name: surrounding-info
*/
?>
<?php get_header(); ?>
<main>
<div id="surrounding-info">
	<div class="top-visual-area">
		<div class="img">
			<picture class="">
				<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/surrounding-info/main_visual-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/surrounding-info/main_visual-sp.jpg 2x">
				<source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/surrounding-info/main_visual-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/surrounding-info/main_visual-pc.jpg 2x">
				<img src="<?php echo get_template_directory_uri(); ?>/images/surrounding-info/main_visual-pc.jpg" alt="トップ背景画像">
			</picture>
		</div>
	</div>
	<div class="breadcrumbs-area">
		<ul class="breadcrumbs-list">
			<li class="link"><a href="<?php echo esc_url( home_url( '/') ); ?>">トップ</a></li>
			<li>周辺情報</li>
		</ul>
	</div>
	<div class="lead-area">
		<div class="ttl-wrap">
			<h4 class="en">Surrounding Information</h4>
			<h3 class="jp">周辺情報</h3>
		</div>
		<p class="lead-sentence">ワンズ ヒーリング ハウスがある東京・駒込は、“旧山の手”と呼ばれる雰囲気と下町情緒が混在するエリア。<br>周辺には歴史と文化の薫る多数の観光スポットもあります。<br>ハウスにお越しの際は、心地よい自然とのふれあいや歴史をめぐる散策もいかがでしょうか。</p>
	</div>
	<div class="contents-area">
		<ul class="info-list">
			<li>
				<div class="img-wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/images/surrounding-info/surroundingInfo_img01.jpg" alt="">
				</div>
				<div class="text-wrap">
					<h3>旧古河庭園<span>Kyu Furukawa Teien</span></h3>
					<p>京都の庭師・小川治兵衛の手による日本庭園と、ジョサイア・コンドル設計の西洋庭園と洋館。春と秋に咲くバラの名所としても有名で、特に秋の紅葉とのコントラストは見事です。</p>
					<div class="route">
						<span class="how-long">ハウスから徒歩５分</span>
					</div>
					<div class="button-wrap">
						<a href="https://maps.app.goo.gl/B1pJVEALbBtyvJLg8" class="">Google Map</a>
					</div>
				</div>
			</li>
			<li>
				<div class="img-wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/images/surrounding-info/surroundingInfo_img02.jpg" alt="">
				</div>
				<div class="text-wrap">
					<h3>六義園<span>Rikugien</span></h3>
					<p>徳川五代将軍徳川綱吉に仕えた柳沢吉保が、和歌に詠まれた風景を表現して創られた優美な庭園。<br>春のしだれ桜は一見の価値があります。</p>
					<div class="route">
						<span class="how-long">ハウスから徒歩10分</span>
					</div>
					<div class="button-wrap">
						<a href="https://maps.app.goo.gl/fQpdyVzYdRcvtYnv8" class="">Google Map</a>
					</div>
				</div>
			</li>
			<li>
				<div class="img-wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/images/surrounding-info/surroundingInfo_img03.jpg" alt="">
				</div>
				<div class="text-wrap">
					<h3>飛鳥山公園<span>Asukayama-Koen</span></h3>
					<p>江戸時代から桜の花見の名所として知られている公園で、重要文化財となっている渋沢栄一の飛鳥山邸跡もあります。<br>また「飛鳥山博物館」では縄文時代・西ヶ原貝塚の遺跡に触れることができます。</p>
					<div class="route">
						<span class="how-long">ハウスから徒歩15分</span>
						<span class="how-long">ハウスから北区巡回Kバスで５分</span>
					</div>
					<div class="button-wrap">
						<a href="https://maps.app.goo.gl/bxQCJidmA9kNTKk98" class="">Google Map</a>
					</div>
				</div>
			</li>
			<li>
				<div class="img-wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/images/surrounding-info/surroundingInfo_img04.jpg" alt="">
				</div>
				<div class="text-wrap">
					<h3>霜降銀座商店街<span>Shimofuri-Ginza</span></h3>
					<p>1956年スタート、昔ながらの商店が今もなお残る商店街です。ハウスに通うお客様の中には、帰りのお買い物を楽しみにしている方もいらっしゃいます。</p>
					<div class="route">
						<span class="how-long">ハウスから徒歩1分</span>
					</div>
					<div class="button-wrap">
						<a href="https://maps.app.goo.gl/YH8FnYrKNuaDT8nb7" class="">Google Map</a>
					</div>
				</div>
			</li>
			<li>
				<div class="img-wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/images/surrounding-info/surroundingInfo_img05.jpg" alt="">
				</div>
				<div class="text-wrap">
					<h3>東京染井温泉<span>SAKURA</span></h3>
					<p>駒込・ソメイヨシノ発祥の地、1000万年前の地層から湧き上がる天然温泉です。</p>
					<div class="route">
						<span class="how-long">ハウスから徒歩15分</span>
						<span class="how-long">JR巣鴨駅から送迎バスあり</span>
					</div>
					<div class="button-wrap">
						<a href="https://maps.app.goo.gl/LB5CVdBVYZi7iBWT6" class="">Google Map</a>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>
</main>
<?php get_footer(); ?>


