</div>
<footer>
      <div class="footer_box">
            <img src="<?php bloginfo('template_url'); ?>/atsu_img\eve-gd029b5dc7_1920.jpg" alt="">
            <p class="copyright">&copy; 2022<?php if( date('Y') > "2022"){echo "-".date('Y');}?> D.GATE-WebStyle</p>
            <div class="icon">
                  <a href="https://twitter.com/Atsu32729144" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/atsu_img\2021 Twitter logo - blue.png" alt="Twitterのアイコンです"></a>
                  <a href="https://github.com/fgdgate/Portfolio_profile.git" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/atsu_img\github-logo_icon-icons.com_73546.png" alt="GitHubのアイコンです"></a>
                  <a href="https://www.instagram.com/dgate_fgd/" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/atsu_img\Instagram_Glyph_Gradient_RGB.png" alt="Instagramのアイコンです"></a>
            </div>
      </div>
</footer>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
      $(document).ready(function(){
            $('.slider').slick({
                  arrows: false,
                  dots: true,
                  infinite: true,
                  zoomout: true,
                  speed: 5000,
                  fade: true,
                  cssEase: 'linear',
                  autoplay: true,
                  mobileFirst: true,
            });
            $('.menu-btn').on('click', function(){
            $('.header_nav').toggleClass('is-active');
            });
      });
      // 1. 動くきっかけを独自の名前（関数：fadeAnime）で定義

      function fadeAnime(){

            //動きの指定
            $('.about_img,.about_text').each(function(){ //about_textというクラス名が
            var elemPos = $(this).offset().top-30;//要素より、50px上の
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll >= elemPos - windowHeight){
            $(this).addClass('fadeIn');// 画面内に入ったらfadeInというクラス名を追記
            }else{
            $(this).removeClass('fadeIn');// 画面外に出たらfadeInというクラス名を外す
            }
            });

            }

            // 2. 定義した名前をページが読み込まれた後・スクロールした後それぞれのきっかけに指定

            // 画面をスクロールをしたら動く場合の記述
            $(window).scroll(function (){

            fadeAnime();/* アニメーション用の関数を呼ぶ*/

      });// ここまで画面をスクロールをしたら動く場合の記述

      // 画面が読み込まれたらすぐに動く場合の記述
      $(window).on('load', function(){

            fadeAnime();/* アニメーション用の関数を呼ぶ*/

      });// ここまで画面が読み込まれたらすぐに動く場合の記述
</script>
</body>
</html>