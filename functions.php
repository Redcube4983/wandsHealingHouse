<?php

/* メインクエリの表示を置き換える */
function change_posts_per_page($query) {
  /* 管理画面,メインクエリに干渉しないために必須 */
  if ( is_admin() || ! $query->is_main_query() ){
       return;
  }
  /* フロントページ表示件数を12件にする */
  if ( $query->is_front_page() ) {
       $query->set( 'posts_per_page', '12' );
  }
  //  if ( $query->is_page('event-story') ) {
  //      $query->set( 'posts_per_page', '-1' );
  //      $query->set('post_type', 'event-story-category');
  //   return;
  // } 
  /* ホームページ表示件数を12件にする */
  if ( $query->is_home() ) {
       $query->set( 'posts_per_page', '12' );
       return;
  }
  /* アーカイブページ表示件数を12件にする */
  if ( $query->is_archive() ) {
       $query->set( 'posts_per_page', '12' );
       return;
  }
  /* カテゴリーページ表示件数を12件にする */
  if ( $query->is_category() ) {
       $query->set( 'posts_per_page', '12' );
       return;
   }
  /* 日付別ページの表示件数を12件にする */
  if ( $query->is_date() ) {
       $query->set( 'posts_per_page', '12' );
       return;
   }
  /* 年別ページの表示件数を12件にする */
   if ( $query->is_year() ) {
       $query->set( 'posts_per_page', '12' );
       return;
  }
  }
  add_action( 'pre_get_posts', 'change_posts_per_page' );

/* mwwpform エラーメッセージ変更 */
function my_error_message($error, $key, $rule){
  if($key === 'name' && $rule === 'noempty'){
      return 'お名前が入力されていません';
  }
  if($key === 'email' && $rule === 'noempty'){
      return 'メールアドレスが入力されていません';
  }
  if($key === 'email-confirm' && $rule === 'noempty'){
    return 'メールアドレスを確認して下さい';
  }
  if($key === 'menu' && $rule === 'noempty'){
    return 'ご希望のイベント・ご希望のメニューが入力されていません';
  }
  return $error;
  }
add_filter( 'mwform_error_message_mw-wp-form-147', 'my_error_message', 10, 3 );


function mvwpform_autop_filter() {
  if (class_exists('MW_WP_Form_Admin')) {
    $mw_wp_form_admin = new MW_WP_Form_Admin();
    $forms = $mw_wp_form_admin->get_forms();
    foreach ($forms as $form) {
      add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
    }
  }
}
mvwpform_autop_filter();
