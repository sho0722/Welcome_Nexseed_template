<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo wp_get_document_title() ?></title>
  <!-- urlの値を読み込ませる -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <!-- 必ず</head>の前に記入する -->
  <?php wp_head(); ?>
</head>
<body>
  <!-- header -->
  <header id="fixed">
    <!-- header左側 -->
    <div class="icon">
      <img src="<?php echo get_template_directory_uri(); ?>/img/seedkun.png" alt="Seedkun">
      <span class="name"><strong>Seed</strong>Kun</span>
    </div>
    <!-- header右側 -->
    <?php wp_nav_menu(
      array (
        //カスタムメニュー名
        'theme_location' => 'header-navi',
        //コンテナを表示しない
        'container' => false,
        //カスタムメニューを設定しない際に固定ページでメニューを作成しない
        'fallback_cb' => false,
        //出力されるulに対してidやclassを表示しない
        'items_wrap' => '<ul class="header-right">%3$s</ul>',
      )
    ); ?>
  </header>
  <!-- headerここまで -->

  <!-- welcome -->
  <main class="welcome" id="margin-for-fixed">
    <h1 class="title">Welcome to NexSeed Okinawa</h1>
    <ul class="guideline">
      <li>Be Athlete</li>
      <li>Go World</li>
      <li>Enjoy Everything</li>
    </ul>
    <div class="btn-group">
      <button class="btn register">新規登録</button>
      <button class="btn login">ログイン</button>
    </div>
  </main>
  <!-- welcomeここまで -->