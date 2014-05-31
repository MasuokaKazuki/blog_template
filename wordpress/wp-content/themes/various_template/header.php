<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo('name'); ?> <?php if(is_single()) { ?> <?php } ?> <?php wp_title(); ?></title>
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<meta name="description" content="WordPress 3.0用の無料テーマです。">
<meta name="keywords" content="WordPress 無料 テーマ, WordPress テーマ, WordPress 3.0 テーマ, WordPress テンプレート, WordPress 無料テンプレート">
<meta property="og:title" content="_various | ブログ説明文"> <!-- ウェブページの名前 -->
<meta property="og:description" content=""> <!-- ウェブページの説明 -->
<meta property="og:type" content="blog">　<!--ウェブページが何のページであるか 例：blog,article,website-->
<meta property="og:url" content="#">	<!-- ウェブページの URL -->
<meta property="og:image" content="#"> <!--ウェブページのサムネイル -->
<meta property="og:locale" content="ja_JP">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
<script src="./common/js/jquery-1.10.2.min.js" type="text/javascript"></script>
<?php wp_head(); ?>
</head>
<body>
	<div class="wrapper">
		<header id="site_header" class="block_element">
			<h1>
				<a href="/index.html"><img src="<?php bloginfo('template_directory'); ?>/common/image/logo.png" alt="_various" width="171px" height="40px" /></a>
			</h1>
			<nav>
				<ul>
					<li><a href="./?cat=2"><img src="<?php bloginfo('template_directory'); ?>/common/image/category_01.png" alt="日記" /></a></li>
					<li><a href="./?cat=3"><img src="<?php bloginfo('template_directory'); ?>/common/image/category_02.png" alt="プログラムについて" /></a></li>
					<li><a href="./?cat=4"><img src="<?php bloginfo('template_directory'); ?>/common/image/category_03.png" alt="音楽について" /></a></li>
				</ul>
			</nav>
		</header><!--#site_header-->
