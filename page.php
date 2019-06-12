<!-- headerを表示 -->
<?php get_header(); ?>

<div class="content">
    <main class="curriculum">

        <!-- 選択した投稿を表示する -->
        <?php if(have_posts()): while(have_posts()):the_post(); ?>

            <!-- タイトルを表示 -->
            <h1><a><?php the_title(); ?></a></h1>

            <!-- 投稿日時の表示 -->
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>

            <!-- 投稿記事のカテゴリーを表示 -->
            <p><?php the_category(', '); ?></p>

            <!-- サムネイルの表示 -->
            <?php if(has_post_thumbnail()): ?>
            <!-- サムネイルが設定されている場合 -->
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <?php else: ?>
            <!-- サムネイルが設定されていない場合 -->
            <img src="http://placehold.jp/300x300.png?text=No Image" alt="">
            <?php endif; ?>

            <!-- 記事の全文を表示 -->
            <p><?php the_content(); ?></p>

        <?php endwhile; endif; ?>

        <!-- 前後の投稿へ移動するリンク -->
        <?php previous_post_link('%link','前へ'); ?>
        <?php next_post_link('%link','次へ'); ?>
        
    </main>

    <?php get_sidebar(); ?>

</div>

<!-- footerを表示 -->
<?php get_footer(); ?>