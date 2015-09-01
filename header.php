<!DOCTYPE html>
<html>
<head>
	<title>Расширяя горизонты</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.png" type="image/png">
	<link href="http://fonts.googleapis.com/css?family=Roboto:400italic,100,700italic,300,700,100italic,300italic,400&amp;subset=cyrillic,cyrillic-ext,latin" rel="stylesheet" type="text/css">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery.jcarousel.min.js"></script>
	<script src="js/svg-lib.js"></script>
	<script src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="template_styles.css" />
</head>
<body>
<div id="svg-placeholder" class="hide"></div>
<div class="layout">
<div class="page-aside">
	<div class="inner">
		<div class="search-box">
			<input type="text" class="search" id="search" placeholder="Найти" />
		</div>
		<?include('mobile-menu.php');?>
	</div>
</div>
<!-- для главной добавить класс home-page к page, для остальных убрать -->
<div class="page">
	<div class="header">
		<button class="btn-menu js-menu" data-action="open"><svg class="icon"><use xlink:href="#menu"/></svg></button>
		<ul class="auth-menu">
			<li class="menu-item"><a href="#" class="menu-link">Вход</a></li>
			<li class="menu-item"><a href="#" class="menu-link">Регистрация</a></li>
		</ul>
	</div>
	<!-- breadcrumbs везде, кроме главной
	<div class="breadcrumbs container">
		<a href="#" class="bcs-link">Главная</a>
		<a href="#" class="bcs-link">Раздел</a>
		<span class="bcs-text">Страница</span>
	</div>
	<div class="workarea container"> -->