<?php
/*
Template Name: single-event-program
*/
?>
<?php get_header(); ?>
<main>
<div id="event-program">
	<div class="top-visual-wrap">
		<div class="img-wrap">
			<picture class="">
				<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/news/news-top-sp.webp 1x,<?php echo get_template_directory_uri(); ?>/images/news/news-top-sp.webp 2x">
				<source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/news/news-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/news/news-top-pc.webp 2x">
				<img src="<?php echo get_template_directory_uri(); ?>/images/news/news-top-sp.webp" srcset="<?php echo get_template_directory_uri(); ?>/images/news/news-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/news/news-top-pc.webp 2x" alt="トップ背景画像">
			</picture>
		</div>
	</div>
</div>
</main>
<?php get_footer(); ?>


