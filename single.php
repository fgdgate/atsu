<?php get_header(); ?>

<?php
if (have_posts()) :
     while (have_posts()) :
       the_post(); 
?> <!-- ループ開始 -->

<div class="single_container">
     <!-- アイキャッチ画像 -->
     <div class="single_container_img">
		<?php the_post_thumbnail('full'); ?> <!-- リクエストしているページのアイキャッチ画像を取得 -->
     </div>
     <!-- タイトル -->
     <div class="single_header_title">
		<?php the_title(); ?> <!-- リクエストしているページタイトルを取得 -->
		<div class="single_header_border"></div>
	</div>

	<!-- 本文 -->
	<article class="article_single">
		<?php the_content(); ?> <!-- リクエストしているページの本文(中身)を取得 -->
	</article>
</div>

<?php
    endwhile; endif; 
?> <!-- ループ終了 -->

<?php get_footer(); ?>

<!-- リクエストしている本文を取得 -->