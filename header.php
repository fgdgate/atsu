<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
	<link rel="preconnect" href="/https://fonts.googleapis.com">
	<link rel="preconnect" href="/https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kaisei+Opti&display=swap" rel="stylesheet">
	<link href ="https://fonts.googleapis.com/css2？family = Kaisei + Opti&family = Potta + One& display = swap "rel =" stylesheet ">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
	<link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/ ">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>./style.css" >
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="header_inner">
			<!--ロゴ画像-->
			<div class="header_logo">
				<a class="a_btn" href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('template_url'); ?>/atsu_img\IMG_E5512.png" alt="d.gateの似顔絵icon画像です">
				</a>
			</div>
			<h2>Webと<span>D</span>esignの<span>扉</span></h2>

			<!-- ハンバーガーメニュー用 -->
			<button type="button" class="menu-btn">
			<i class="fas fa-bars" aria-hidden="true"></i>
			</button>

			<div class="header_nav">
				<!--ナビ-->
				<div class="nav_item"><a href="<?php bloginfo('url'); ?>#home">Home</a></div>
				<div class="nav_item"><a href="<?php bloginfo('url'); ?>#about">About</a></div>
				<div class="nav_item"><a href="<?php bloginfo('url'); ?>#blog">blog</a></div>
				<div class="nav_item"><a href="<?php bloginfo('url'); ?>#links">Links</a></div>
				<div class="nav_item"><a href="<?php bloginfo('url'); ?>#contact">Contact</a></div>
			</div>
		</div>
	</header>
	<div class="main">