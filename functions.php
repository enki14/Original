<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'reset-style', get_template_directory_uri() . '/sanitize.css', '', '1.0.0', 'all');
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/mystyle.css', '', '1.0.0', 'all');
}


/**
 * WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル.
 */
define( 'WP_SCSS_ALWAYS_RECOMPILE', true );

// 管理画面でアイキャッチ画像の設定項目が表示されるようにしている
add_theme_support('post-thumbnails');



