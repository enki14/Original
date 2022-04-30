<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'reset-style', get_template_directory_uri() . '/sanitize.css', '', '1.0.0', 'all');
}


/**
 * WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル.
 */
define( 'WP_SCSS_ALWAYS_RECOMPILE', true );

// 管理画面でアイキャッチ画像の設定項目が表示されるようにしている
add_theme_support('post-thumbnails');



//サムネイルカラム追加
function customize_manage_posts_columns($columns) {
  $columns['thumbnail'] = __('Thumbnail');
  return $columns;
}
add_filter( 'manage_posts_columns', 'customize_manage_posts_columns' );

//サムネイル画像表示
function customize_manage_posts_custom_column($column_name, $post_id) {
  if ( 'thumbnail' == $column_name) {
      $thum = get_the_post_thumbnail($post_id, 'small', array( 'style'=>'width:100px;height:auto;' ));
  } if ( isset($thum) && $thum ) {
      echo $thum;
  } else {
      echo __('None');
  }
}
add_action( 'manage_posts_custom_column', 'customize_manage_posts_custom_column', 10, 2 );



// 管理画面の「外観」の「ウィジェット」追加
function sample_widgets(){
  register_sidebar(array(
    'name' => '共通サイドバー',
    'description' => 'サイドバーウィジェット',
    'id' => 'sidebar',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
}
add_action('widgets_init', 'sample_widgets');


// 固定ページにcategory-life.phpを読み込んで、「暮らし」のカテゴリ一覧を表示させた
function include_shortcode($params = array()){
  shortcode_atts(array(
    'file' => 'default'
  ), $params);
  ob_start();
  include(TEMPLATEPATH. '/shortcode/category-life.php');
  return ob_get_clean();
}
add_shortcode('life-list', 'include_shortcode');



// オリジナルのjsファイルは ➀ 登録して
function register_script(){
  wp_register_script('header_fixed', get_template_directory_uri() . '/js/header-fixed.js');
}
add_action('wp_enqueue_scripts', 'register_script');

// ➁ 読み込ませる
function my_script() {
  wp_deregister_script('jquery');
  // jqueryそのものの読み込み
  wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-2.2.4.js', array(), '2.2.4');

  // 投稿ページのみ該当のjsファイルを読み込む
  // ハンドル名はregister_scriptの時と同じ
  if(is_single()){
    wp_enqueue_script('header_fixed', get_template_directory_uri() . '/js/header-fixed.js', array('jquery'));
  }
}
add_action( 'wp_enqueue_scripts', 'my_script' );



