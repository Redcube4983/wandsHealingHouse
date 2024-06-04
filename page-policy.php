<?php
/*
Template Name: policy
*/
?>
<?php get_header(); ?>
<main>
<div id="policy">
	<div class="top-visual-area">
		<div class="img">
			<picture class="">
				<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/policy/main_visual-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/policy/main_visual-sp.jpg 2x">
				<source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/policy/main_visual-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/policy/main_visual-pc.jpg 2x">
				<img src="<?php echo get_template_directory_uri(); ?>/images/policy/main_visual-pc.jpg" alt="トップ背景画像">
			</picture>
		</div>
	</div>
	<div class="breadcrumbs-area">
		<ul class="breadcrumbs-list">
			<li class="link"><a href="<?php echo esc_url( home_url( '/') ); ?>">トップ</a></li>
			<li>プライバシーポリシー</li>
		</ul>
	</div>
	<div class="lead-area">
		<div class="ttl-wrap">
			<h4 class="en">Privacy Policy</h4>
			<h3 class="jp">プライバシーポリシー</h3>
		</div>
	</div>
	<div class="contents-area">
		<ul class="policy-list">
			<li>
				<h3>お客様情報の保護についての考え方</h3>
				<p>ワンズ ヒーリング ハウス（以下「当ハウス」）は、お客様からお預かりする個人情報を適正に取り扱い、安全に保管することを最重要課題と位置づけ、お客様の個人情報の保護に努めます。</p>
			</li>
			<li>
				<h3>個人情報の管理</h3>
				<p>当ハウスは、お客様の個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。</p>
			</li>
			<li>
				<h3>個人情報の利用目的</h3>
				<p>お客様からお預かりした個人情報は、当ハウスからのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
			</li>
			<li>
				<h3>個人情報の第三者への開示・提供の禁止</h3>
				<p>当ハウスは、お客様よりお預かりした個人情報を適切に管理し、お客様の同意がある場合以外を除き、個人情報を第三者に開示いたしません。</p>
			</li>
			<li>
				<h3>個人情報の安全対策</h3>
				<p>当ハウスは、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。</p>
			</li>
			<li>
				<h3>ご本人の照会</h3>
				<p>お客様がご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。</p>
			</li>
			<li>
				<h3>法令、規範の遵守と見直し</h3>
				<p>当ハウスは、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</p>
			</li>
		</ul>
	</div>
</div>
</main>
<?php get_footer(); ?>


