<?php
require_once(dirname(__FILE__).'/functions.php');
global $theme;
global $modules;
global $accounts;
global $navigation;
global $site;
global $pages;
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Cafe - Free CSS template by ChocoTemplates.com</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $theme->ThemeScript(); ?>css/images/favicon.ico" />
	<link rel="stylesheet" href="<?php echo $theme->ThemeScript(); ?>css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo $theme->ThemeScript(); ?>css/flexslider.css" type="text/css" media="all" />
	
	<script src="<?php $theme->ThemeScript(); ?>js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo $theme->ThemeScript(); ?>js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="<?php echo $theme->ThemeScript(); ?>js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="<?php echo $theme->ThemeScript(); ?>js/functions.js" type="text/javascript"></script>
</head>
<body>
	<!-- wrapper -->
	<div id="wrapper">
		<!-- header -->
		<div class="header">
			<!-- shell -->
			<div class="shell">
				<h1 id="logo"><a href="#"></a></h1>
				<?php require_once('assets/testimonials.php'); ?>
				<!-- header-right -->
				<?php require_once('assets/social.php'); ?>
				<div class="cl">&nbsp;</div>
				<!-- end of header -->
				<!-- navigation -->
				<nav id="navigation">
					<ul>
						<?php $navigation->LoadMainMenu(); ?>
					</ul>
				</nav>
				<!-- end of navigation -->
				<!-- slider-holder -->
				<div class="slider-holder">
					<span class="left"></span>
					<span class="right"></span>
					<!-- flexslider -->
					<?php doowop_sliderStatus(); ?>
				
					<!-- end of flexslider -->
				</div>
				<!-- end of slider -->
			</div>
			<!-- end of shell -->
		</div>
		<!-- end of header -->
		<!-- main -->
		<div class="main">
			<div class="shell">
				<!-- cols -->
				<section class="cols">
					<?php echo $pages->StaticBody(); ?>
					<div class="cl">&nbsp;</div>
				</section>
				<!-- end of cols -->
				<!-- content -->
				<div class="content">
				<h3>News Feed</h3>
				<?php echo NewsFeed(); ?>
					
				
				
				</div>
				<!-- end of content -->
				<!-- sidebar -->
				<aside class="sidebar">
					<div class="widget">
						<div class="facebook-social">
							<img src="css/images/facebook-img.png" alt="" />
						</div>
					</div>
				</aside>
				<!-- end of sidebar -->
				<div class="cl">&nbsp;</div>
			</div>
		</div>
		<!-- end of main -->
		<div id="footer-push"></div>
	</div>
	<!-- end of wrapper -->
	<div id="footer">
		<div class="shell">
			<div class="footer-nav">
				<ul>
					<li><a href="#">Homepage</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Our Menu</a></li>
					<li><a href="#">Reservations</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Showcase</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
			<p class="copy">© Copyright 2012<span>|</span>Café CSS Template. Design by <a href="http://chocotemplates.com" target="_blank">ChocoTemplates.com</a></p>
		</div>
	</div>
</body>
</html>