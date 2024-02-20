<?php
/*
Template Name: event-program
*/
?>
<?php get_header(); ?>
<main>
<div id="page-visual">
        <div class="page-visual-inner">
            <div id="breadcrumb">
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/') ); ?>">トップ</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/topics/') ); ?>">トピックス一覧</a></li>
                    <li><?php echo get_the_title(); ?></li>
                </ul>
            </div>
            <div id="keyvisual" class="page-visual-area">
                <div class="page-visual-area-inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/topics/topics-top.jpg" alt="トピックスイメージ">
                    <div class="sub-page-ttl">
                        <p class="sub-page-ttl-en">TOPICS</p>
                        <div class="sub-page-ttl-jp">トピックス</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section id="topics" class="Scroll-bottom2">
<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
       <h1><?php echo get_the_title(); ?></h1>
       <time><?php echo get_the_date('Y/m/d'); ?></time>
       <?php the_content(); ?>
    <?php endwhile; ?>
    <?php else: ?>
    <!-- 投稿が無い場合の処理 -->
    <?php endif; ?> 
</section>
</main>
<?php get_footer(); ?>