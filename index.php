<!-- header.phpを読み込む -->
<?php get_header(); ?>

  <div class="content">

  <!-- curriculum -->
  <main class="curriculum">
    <!-- 投稿の有無をチェック -->
    <?php if (have_posts()): ?>
    <h2 class="sub-title">最近の投稿</h2>
    <ul class="img-box">

      <!-- 投稿された記事があればすべて表示する -->
      <?php while (have_posts()): the_post(); ?>
      <li>
        <!-- サムネイルの表示 -->
        <?php if(has_post_thumbnail()): ?>
          <!-- サムネイルが設定されている場合 -->
          <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        <?php else: ?>
          <!-- サムネイルが設定されていない場合 -->
          <img src="http://placehold.jp/300x300.png?text=No Image" alt="">
        <?php endif; ?>

        <!-- 投稿のタイトルを表示 -->
        <span><?php the_title(); ?></span>
        <!-- 投稿の最初の部分を表示 -->
        <span class="content"><?php the_excerpt(); ?></span>

        <!-- single.phpに移動する -->
        <a href="<?php the_permalink(); ?>">続きを読む</a>
      </li>

      <?php endwhile ?>

    </ul>

    <?php else: ?>
      <h2>投稿がありません</h2>

    <?php endif; ?>
  </main>
  
<!-- sidebar.phpを読み込む -->
<?php get_sidebar(); ?>

</div>

<!-- contact.phpを読み込む -->
<?php get_template_part('contact'); ?>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>