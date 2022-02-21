<?php get_header(); ?>

<?php
if (have_posts()) :
     while (have_posts()) :
       the_post(); 
?> <!-- ループ開始 -->

<div class="page_header">
     <!-- アイキャッチ画像 -->
     <?php the_post_thumbnail('full'); ?> <!-- リクエストしているページのアイキャッチ画像を取得 -->

     <!-- タイトル -->
     <div class="page_header_title">
          <?php the_title(); ?> <!-- リクエストしているページタイトルを取得 -->
		 <div class="page_header_border"></div>
	</div>
</div>

<!-- 本文 -->
<article class="article">
     <?php the_content(); ?> <!-- リクエストしているページの本文(中身)を取得 -->
</article>

<?php
    endwhile; endif; 
?> <!-- ループ終了 -->

<?php get_footer(); ?>

<!-- リクエストしている本文を取得 -->