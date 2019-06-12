<?php
// ヴィジェットを使うための宣言
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'id' => 'sidebar-1',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
    ));

// 記事にサムネイル画像を設定するためのコード
add_theme_support('post-thumbnails');

// カスタムメニューの「場所」を設定
register_nav_menu( 'header-navi', 'ヘッダーナビ' );
register_nav_menu( 'footer-navi', 'フッターナビ' );
?>