<?php get_header(); ?>

<?php
if (have_posts()) : while (have_posts()) : the_post(); ?> <!-- ループ開始 -->
		<!-- アイキャッチ画像 -->
		<?php the_post_thumbnail('full'); ?> <!-- リクエストしているページのアイキャッチ画像を取得 -->
		<!-- タイトル -->
		<?php the_title(); ?> <!-- リクエストしているページタイトルを取得 -->
		<!-- 本文 -->
		<?php the_content(); ?> <!-- リクエストしているページの本文(中身)を取得 -->
<?php
	endwhile; endif; ?> <!-- ループ終了 -->

<?php get_footer(); ?>

<!-- リクエストしている本文を取得 -->