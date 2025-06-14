<!DOCTYPE html>
<html <? language_attributes(); ?>>

<head>
	<meta charset="<? bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
	<? wp_head(); ?>
</head>

<body>

<main>

	<header class="header js-header-mobile header--dark">
		<button class="mobile-nav-btn burger js-mobile-nav-burger">
			<div class="nav-icon burger__icon"></div>
		</button>
	</header>

	<div class="mobile-nav">
		<ul class="mobile-nav__list">
			<li><a href="index.html">Главная</a></li>
			<li><a href="docs.html">Документация</a></li>
		</ul>
	</div>