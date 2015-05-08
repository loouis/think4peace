<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">

	<!-- favicons for all devices  -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo(template_url);?>/img/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo(template_url);?>/img/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo(template_url);?>/img/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo(template_url);?>/img/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo(template_url);?>/img/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/<?php bloginfo(template_url);?>/imgapple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo(template_url);?>/img/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo(template_url);?>/img/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo(template_url);?>/img/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo(template_url);?>/img/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo(template_url);?>/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo(template_url);?>/img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo(template_url);?>/img/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo(template_url);?>/img/manifest.json">
	<meta name="msapplication-TileColor" content="#009cd6">
	<meta name="msapplication-TileImage" content="<?php bloginfo(template_url);?>/img/ms-icon-144x144.png">
	<meta name="theme-color" content="#009cd6">


	<!-- meta tags -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	<!-- media queries -->
	<meta name="viewport" content="width=device-width">

	<!-- enqueue scripts and styles -->
	<?php wp_head(); ?>


	<!--  -->
	<script src="//use.typekit.net/mzu5arh.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "c61661e3-1696-4a81-ad66-d9abf0188c78", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

</head>
	<body <?php body_class( $class ); ?>>

	<nav>
		<div class="wrapper">

			<a class="logo" href="<?php bloginfo(url);?>/#welcome">
				<img src="<?php bloginfo(template_url);?>/img/logo.png" alt="Think logo">
			</a>
			
			<!-- Burger button -->
			<button class="burger-menu">
				<div id="nav-icon3">
				  <span></span>
				  <span></span>
				  <span></span>
				  <span></span>
				</div>
			</button>
			
			<?php if(is_front_page() ) {?>

				<!-- Front page header -->
				<div class="links-container home-nav" id="menu-center">
					<ul class="nav-links">
						<li class="nav-links__the-challenge"><a href="#" data-scroll-nav='1'>The Challenge</a></li>
						<li class="nav-links__the-schools" ><a href="#" id="google-test" onClick="_gaq.push(['_trackEvent', 'think', 'header','Button click' ]);" data-scroll-nav='2'>The Schools we work with</a></li>
						<li class="nav-links__the-methodology"><a href="#" data-scroll-nav='3'>The Methodology</a></li>
						<li class="nav-links__the-benefits"><a href="#" data-scroll-nav='4'>The Benefits</a></li>
						<li class="nav-links__the-benefits"><a href="#" data-scroll-nav='5'>Testimonials</a></li>
						<li class="nav-links__blog"><a href="#" data-scroll-nav='6'>Blog</a></li>
						<li class="nav-links__contact"><a href="#">Contact</a></li>
					</ul>
				</div><?php
			}
			else{?>

			<!-- Other page header -->
			<div class="links-container" id="menu-center">
				<ul class="nav-links">
					<li class="nav-links__the-challenge"><a href="<?php bloginfo(url);?>/#the-challenge">The Challenge</a></li>
					<li class="nav-links__the-schools" id="google-test"><a href="<?php bloginfo(url);?>/#the-schools" onClick="_gaq.push(['_trackEvent', 'think', 'header','Button click' ]);" >The Schools we work with</a></li>
					<li class="nav-links__the-methodology"><a href="<?php bloginfo(url);?>/#the-methodology">The Methodology</a></li>
					<li class="nav-links__the-benefits"><a href="<?php bloginfo(url);?>/#the-benefits">The Benefits</a></li>
					<li class="nav-links__the-benefits"><a href="<?php bloginfo(url);?>/#quotes">Testimonials</a></li>
					<li class="nav-links__blog"><a href="<?php bloginfo(url);?>/#blog">Blog</a></li>
					<li class="nav-links__contact"><a href="#">Contact</a></li>
				</ul>
			</div>
			<?php }?>
			
		</div>
	</nav>