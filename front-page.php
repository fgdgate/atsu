<?php get_header(); ?>
<!-- slickゾーン開始 -->
<div id="top__visual">
      <div class="slider_text">
            <p>Let's open the gate of Web and Design and create an infinite future.</p>
      </div>
      <div class="slider">
            <div>
                  <img class="slider01" src="<?php bloginfo('template_url'); ?>/atsu_img\sea-4768869_1920.jpg" alt="ビーチ、スライダー画像01">
            </div>
            <div>
                  <img class="slider02" src="<?php bloginfo('template_url'); ?>/atsu_img\IMG_5469.JPG" alt="海へと繋ぐ桟橋、スライダー画像02">
            </div>
            <div>
            <img class="slider03" src="<?php bloginfo('template_url'); ?>/atsu_img\AdobeStock_340842063.jpeg" alt="水面に映るヤシの木の陰、スライダー画像03">
            </div>

      </div>
</div><!-- slickゾーン終了 -->

<!-- 共通コンテンツ -->
<div id="contentt" class="content content__items">
	<div class="content__inner">
		<!--コンテンツのタイトルエリア-->
		<div class="content__header">
			<div class="content__header__inner">
				About
				<!--下線-->
				<div class="content__header__border"></div>
      </div>
    </div>
  </div>
            <!-- ページトップアイコン -->
            <div id="page_top"><a href="#"></a></div>

  <!-- profileゾーン -->
  <div id="visual">
    <div class="about_inner">
      <div class="left">
        <div class="text-area">
          <h2 class="title">
            <span class="en"><span>P</span>rofile....</span>
            <span class="ja">D.GATE,中の人</span>
          </h2>
          <p class="copy">
            1973年生/大阪府出身/A型/水瓶座<br>
            学力と絵心は全くなし。ですが夢を追いかけたくて必死でプログラミングを学びました。<br>
            現在は、脱！会社員を目標にフリーランス活動を積極的に展開中です。

          </p>
        </div>
      </div>
      <div class="right">
        <img class="pc" src="<?php bloginfo("template_url"); ?>/atsu_img\sun.jpg" alt="">
      </div>
    </div>

    <!-- design ゾーン -->
    <div class="about_inner">
      <div class="left">
        <div class="text-area">
          <h2 class="title">
            <span class="en"><span>D</span>:sign....</span>
            <span class="ja">採用作品&選考作品</span>
          </h2>
          <p class="copy">
          ロゴ・名刺・チラシ・メニュー表などの制作を承っております。
          クラウドソーシングサイトにて受注頂いております。
          先ずはお気軽にご相談ください。
          </p>
        </div>
      </div>
      <div class="right">
        <img class="pc" src="<?php bloginfo("template_url"); ?>/atsu_img\desk.jpg" alt="">
      </div>
    </div>

    <!-- portfolioゾーン -->
    <div class="about_inner">
      <div class="left">
        <div class="text-area">
          <h2 class="title">
            <span class="en"><span>P</span>ortfolio.</span>
            <span class="ja">模写修行～自作サイトへの道</span>
          </h2>
          <p class="copy">
            コーディングができるようになっても、サイトのデザインは多種多様です。
            一つのサイトを作る時間やユーザー様のニーズに合わせられるように、
            日々スキルUPをしコンバージョン率の取れるサイト作りを目指しています。
          </p>
        </div>
      </div>
      <div class="right">
        <img class="pc" src="<?php bloginfo("template_url"); ?>/atsu_img\vintage.jpg" alt="">
      </div>
    </div>
  </div>
</div>
<!-- 共通コンテンツ -->
<div id="contact" class="contact content__items">
	<div class="content__inner">
		<!--コンテンツのタイトルエリア-->
		<div class="content__header">
			<div class="content__header__inner">
				Blog
				<!--下線-->
				<div class="content__header__border"></div>
      </div>
    </div>
  </div>
  <div class="blog_content">
<?php
// 指定したカテゴリーの ID を取得
$category_id = get_cat_ID('Blog');
// このカテゴリーの URL を取得(ニュース一覧はこちら用のリンク)
$category_link = get_category_link($category_id);
// 指定した記事のみ取得
query_posts([
    'posts_per_page' => 3,
    'cat' => $category_id,
]);
?>
<?php
if (have_posts()) : //記事があるか判定
    while (have_posts()) : //記事一覧を取得するループを開始
        the_post(); //ループ中、次の記事に進みます
?>
	<!--1記事-->
    <a href="">
        <div class="blog_items">
            <!--記事の投稿日-->
            <div class="blog_item blog_date">
              <?php echo get_the_date('Y.m.d'); ?>
            </div>
            <!--記事のタイトル-->
            <div class="blog_item blog_title">
              <?php the_title(); ?>
            </div>
            <!--デザイン右の矢印-->
            <div class="blog_item blog_anchor">
                >>>
            </div>
        </div>
    </a>
    <?php endwhile; endif; ?>

    <div class="blog_button">
        <a href="" class="a_btn">BLOG一覧はこちら</a>
    </div>
</div>

<!-- 共通コンテンツ -->
<div id="contact" class="contact content__items">
	<div class="content__inner">
		<!--コンテンツのタイトルエリア-->
		<div class="content__header">
			<div class="content__header__inner">
				Links
				<!--下線-->
				<div class="content__header__border"></div>
        </div>
    </div>
  </div>
  <div class="links_container">
    <div class="links_grid">
      <a href="https://crowdworks.jp/public/employees/4386499" target="_blank" rel="nofollow"><img src="<?php bloginfo("template_url"); ?>/atsu_img\250_250.png" alt="クラウドワークスのアイコンです"></a>
    </div>
    <div class="links_grid">
      <a href="https://www.lancers.jp/affiliate/track?id=2486185&link=%2Fprofile%2Ffgdgert" target="_blank" rel="nofollow"><img alt="クラウドソーシング「ランサーズ」" src="https://www.lancers.jp/img/affiliate/lancer_1_300x250.gif?v=2.0" border="0"></a>
    </div>
    <div class="links_grid">
      <a href="https://coconala.com/users/2391567" target="_blank" rel="nofollow"><img border="0" width="300" height="250" alt="" src="https://www28.a8.net/svt/bgt?aid=200815634955&wid=003&eno=01&mid=s00000012624009090000&mc=1" target="_blank" rel="nofollow"></a><img border="0" width="1" height="1" src="https://www11.a8.net/0.gif?a8mat=3BK6C2+FSL11E+2PEO+1I4AW1" target="_blank" rel="nofollow" alt=""></div>
    <div class="links_grid">
      <a href="https://px.a8.net/svt/ejp?a8mat=3BG5JI+FM19DU+50+2HRIVL" target="_blank" rel="nofollow"><img border="0" width="300" height="250" alt="" src="https://www21.a8.net/svt/bgt?aid=200627982944&wid=003&eno=01&mid=s00000000018015077000&mc=1" target="_blank" rel="nofollow"></a><img border="0" width="1" height="1" src="https://www11.a8.net/0.gif?a8mat=3BG5JI+FM19DU+50+2HRIVL" target="_blank" rel="nofollow" alt="">
    </div>
    <div class="links_grid"><a href="https://px.a8.net/svt/ejp?a8mat=3BG5JK+2P1ODU+CO4+15S78H" target="_blank" rel="nofollow"><img border="0" width="300" height="250" alt="" src="https://www22.a8.net/svt/bgt?aid=200627984163&wid=001&eno=01&mid=s00000001642007018000&mc=1" target="_blank" rel="nofollow"></a><img border="0" width="1" height="1" src="https://www11.a8.net/0.gif?a8mat=3BG5JK+2P1ODU+CO4+15S78H" target="_blank" rel="nofollow" alt="">
    </div>
    <div class="links_grid">
      <a href="https://hb.afl.rakuten.co.jp/ichiba/15674528.d1df62ae.15674529.8dd08dbd/_RTLink7281?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc5158237f53b21604ab8602e1e2edfe0%2F&link_type=pict&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0Iiwic2l6ZSI6IjMwMHgzMDAiLCJuYW0iOjEsIm5hbXAiOiJyaWdodCIsImNvbSI6MSwiY29tcCI6ImRvd24iLCJwcmljZSI6MCwiYm9yIjoxLCJjb2wiOjEsImJidG4iOjEsInByb2QiOjEsImFtcCI6ZmFsc2V9" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"><img src="https://hbb.afl.rakuten.co.jp/hgb/1ded9aa7.60e754c8.1ded9aa8.1357e833/?me_id=1278256&item_id=19902747&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Frakutenkobo-ebooks%2Fcabinet%2F6052%2F2000009456052.jpg%3F_ex%3D300x300&s=300x300&t=pict" border="0" style="margin:2px" alt="" title=""></a>
  </div>
    <div class="links_grid">
    <a href="https://hb.afl.rakuten.co.jp/ichiba/15674528.d1df62ae.15674529.8dd08dbd/_RTLink7281?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F4ec57ca004a0ba37474a2d9d4d1d930e%2F&link_type=pict&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0Iiwic2l6ZSI6IjMwMHgzMDAiLCJuYW0iOjEsIm5hbXAiOiJyaWdodCIsImNvbSI6MSwiY29tcCI6ImRvd24iLCJwcmljZSI6MCwiYm9yIjoxLCJjb2wiOjEsImJidG4iOjEsInByb2QiOjEsImFtcCI6ZmFsc2V9" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"><img src="https://hbb.afl.rakuten.co.jp/hgb/1ded9aa7.60e754c8.1ded9aa8.1357e833/?me_id=1278256&item_id=18146136&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Frakutenkobo-ebooks%2Fcabinet%2F1908%2F2000007231908.jpg%3F_ex%3D300x300&s=300x300&t=pict" border="0" style="margin:2px" alt="" title=""></a>
    </div>
    <div class="links_grid">
      <a href="<?php bloginfo('url'); ?>#home" target="_blank" rel="nofollow"><img src="<?php bloginfo("template_url"); ?>" alt=""></a>
    </div>
  </div>
</div>


<!-- 共通コンテンツ -->
<div id="contact" class="contact content__items">
	<div class="content__inner">
		<!--コンテンツのタイトルエリア-->
		<div class="content__header">
			<div class="content__header__inner">
				Contact
        <!--下線-->
        <div class="content__header__border"></div>
      </div>
    </div>
  </div>
  <div class="contact_inner">
    <div class="contact_img">
      <img src="<?php bloginfo("template_url"); ?>/atsu_img\asian-4033335_640.jpg" alt="お問い合わせイメージ画像です">
    </div>
    <div class="contact_text">
      <p>Web制作からデザイン作成のご依頼・ご相談はお問い合わせフォームよりご連絡ください。</p>
    </div>
    <div class="contact_button">
      <a class="contact_btn" href="#">お問い合わせはこちらから<span></span></a>
    </div>
  </div>
</div>
<?php get_footer(); ?>

