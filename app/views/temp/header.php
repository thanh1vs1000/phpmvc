<!DOCTYPE html>
<html lang="en">
<head>
	<title>Categories</title>
	<base href="<?php echo BASE_URL; ?>">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="aStar Fashion Template Project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
	<link href="public/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="public/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="public/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="public/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="public/css/categories.css">
	<link rel="stylesheet" type="text/css" href="public/css/categories_responsive.css">
	<link rel="stylesheet" type="text/css" href="public/css/style1.css">
</head>
<body>

	<div class="super_container">

		<!-- Header -->


		<!-- Menu -->

		<div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
			<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
			<div class="menu_top d-flex flex-row align-items-center justify-content-start">

			</div>
			<div class="menu_search">
				<form action="#" class="header_search_form menu_mm">
					<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
					<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
						<i class="fa fa-search menu_mm" aria-hidden="true"></i>
					</button>
				</form>
			</div>
			<nav class="menu_nav">
				<ul class="menu_mm">
					<li class="menu_mm"><a href="index.html">home</a></li>
					<li class="menu_mm"><a href="#">woman</a></li>
					<li class="menu_mm"><a href="#">man</a></li>
					<li class="menu_mm"><a href="#">lookbook</a></li>
					<li class="menu_mm"><a href="blog.html">blog</a></li>
					<li class="menu_mm"><a href="contact.html">contact</a></li>
				</ul>
			</nav>
			<div class="menu_extra">
				<div class="menu_social">
					<ul>
						<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Sidebar -->

		<div class="sidebar">

			<!-- Info -->
			<div class="info">
				<div class="info_content d-flex flex-row align-items-center justify-content-start">


				</div>
			</div>

			<!-- Logo -->
			<div class="sidebar_logo">
				<a href="#"><div>a<span>star</span></div></a>
			</div>

			<!-- Sidebar Navigation -->
			<nav class="sidebar_nav">
				<ul>
					<?php foreach ($menus as $cate): ?>
						<li><a href="<?= BASE_URL . "danh-muc?id=" . $cate->id ?>"><?php echo $cate->cate_name ?>(<?php echo $cate->countTotalProductBelong(); ?>)</i></a></li>
					<?php endforeach ?>
				</ul>
			</nav>

			<!-- Search -->
			<div class="search">
				<form action="#" class="search_form" id="sidebar_search_form">
					<input type="text" class="search_input" placeholder="Search" required="required">
					<button class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>

			<!-- Cart -->
			<div class="cart d-flex flex-row align-items-center justify-content-start">
				<div class="cart_icon"><a href="cart.html">
					<a href="<?php echo BASE_URL . 'chi-tiet-gio-hang' ?>"><img src="public/images/bag.png" alt=""></a>
					<div class="cart_num"><?php echo getTotalProductInCart(); ?>)</div>
				</a></div>
				<div class="cart_text"><a href="<?php echo BASE_URL . 'chi-tiet-gio-hang' ?>">Giỏ hàng</a></div>

			</div>
		</div>
