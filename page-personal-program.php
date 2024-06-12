<?php
/*
Template Name: personal-program
*/
?>
<?php get_header(); ?>
<main>
<div id="personal-program">
	<div class="top-visual-area">
		<div class="img">
		<picture class="">
				<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/personal-program/main_visual-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/personal-program/main_visual-sp.jpg 2x">
				<source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/personal-program/main_visual-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/personal-program/main_visual-pc.jpg 2x">
				<img src="<?php echo get_template_directory_uri(); ?>/images/personal-program/main_visual-pc.jpg" alt="トップ背景画像">
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
		<div class="contents-inner therapy-area">
			<div class="img-wrap">
				<ul class="right-img-box">
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/personal-program/personalProgram_img01.jpg" alt=""></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/personal-program/personalProgram_img02.jpg" alt=""></li>
				</ul>
			</div>
			<div class="text-wrap">
				<h3>ボディセラピー＆チャネリング</h3>
				<p>ボディリコネクション、それは、自分自身との「再統合・再接続」身体と心と魂（スピリット）がひとつに繋がるためのセラピーです。<br>ボディセラピー施術中に受け取ったチャネリングメッセージをお伝えいたします。完全予約制、女性のみ対象といたしております。</p>
				<div class="button-wrap">
					<a href="<?php echo esc_url( home_url( 'reconnection-therapy') ); ?>" class="">read more</a>
				</div>
				<div class="box">
					<div class="text-box">
						<h4><span>Body Re-connection Therapy</span><br>ボディ リコネクション セラピー</h4>
						<span class="caption">2種類のボディトリートメント＋チャネリング</span>
					</div>
					<div class="price-box">
						<div class="price">
							<span>price</span>
							<ul>
								<li>60分　13,000円（税込）</li>
								<li>90分　16,000円（税込）</li>
								<li>120分　19,000円（税込）</li>
							</ul>
						</div>
						<div class="button-wrap">
                            <a href="<?php echo esc_url( home_url( 'reconnection-therapy') ); ?>" class="">read more</a>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<div class="contents-inner dialogue-area">
			<div class="img-wrap">
				<ul class="right-img-box">
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/personal-program/personalProgram_img03.jpg" alt=""></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/personal-program/personalProgram_img04.jpg" alt=""></li>
				</ul>
			</div>
			<div class="text-wrap">
				<h3>チャネリング ダイアローグ（対話）- 個人セッション</h3>
				<p>お客様とチャネラーが1対1の対話形式で、大天使ミハエルからのメッセージをお伝えいたします。（ボディセラピーは行いません）<br>自分自身で聞くことが難しい、魂の中に眠る純粋なスピリットの声を受け取り、ミハエルノブコを通して、言葉としてお伝えいたします。遠隔（ZOOM）でのセッションも承っております。</p>
				<div class="box">
					<h4><span>channeling Dialogue</span><br>チャネリング ダイアローグ（対話）- 個人セッション</h4>
					<span class="caption">（対面またはZOOM遠隔）</span>
					<div class="price-box">
						<div class="price">
							<span>price</span>
							<ul>
							<li>-45分　5,000円〜ドネーション性</li>
							</ul>
						</div>
						<div class="button-wrap">
                            <a href="<?php echo esc_url( home_url( 'channeling-dialogue') ); ?>" class="">read more</a>
                        </div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
</main>
<?php get_footer(); ?>


