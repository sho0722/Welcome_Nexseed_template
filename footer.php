  <!-- footer -->
  <footer>
    <!-- footer左側 -->
    <div class="icon">
      <img src="<?php echo get_template_directory_uri(); ?>/img/seedkun.png" alt="Seedkun">
      <span class="name"><strong>Seed</strong>Kun</span>
    </div>
    <!-- footer右側 -->
    <?php wp_nav_menu(
      array (
        //カスタムメニュー名
        'theme_location' => 'footer-navi',
        //コンテナを表示しない
        'container' => false,
        //カスタムメニューを設定しない際に固定ページでメニューを作成しない
        'fallback_cb' => false,
        //出力されるulに対してidやclassを表示しない
        'items_wrap' => '<ul class="footer-right">%3$s</ul>',
      )
    ); ?>

    <p class="footer-right">Copyright (c) SeedKun inc</p>
  </footer>

  <!-- 必ず</footer>の前に記入する -->
  <?php wp_footer(); ?>
</body>
</html>
