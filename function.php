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
<!-- if ( $query->is_page('event-story') ) {
     $query->set( 'posts_per_page', '-1' );
     $query->set('post_type', 'event-story-category');
  return;
} -->
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