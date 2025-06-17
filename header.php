<!DOCTYPE html>
<html <? language_attributes(); ?>>

<head>
	<meta charset="<? bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
	<? wp_head(); ?>
</head>

<body>

<main>

	<header class="header js-header is-visible">
		<div class="header__body">
			<div class="header__inner d-flex flex-align-center flex-justify-sb">
				<div class="header__logos d-flex flex-align-center">
					<a href="<?= home_url(); ?>"><img src="<?= STANDART_DIR; ?>img/raiting.svg" alt=""></a>
					<a href="https://business-ombudsman.mos.ru/"><img src="<?= STANDART_DIR; ?>img/logo.svg" alt=""></a>
				</div>
				<nav class="header__menu menu">
					<button class="header__button-mobile button button--text" data-hystmodal="#join">
						<span>Подать анкету</span>
						<span class="button__icon-wrap">
							<svg width="14" height="14" class="button__icon">
								<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
							</svg>
						</span>
					</button>
					<?php
						wp_nav_menu([
							'theme_location'  => 'footer-menu',
							'container'       => '',
							'container_class' => '',
							'menu_class'      => '',
							'items_wrap'      => '<ul class="%2$s header__menu-list menu__list">%3$s</ul>'
						]);
					?>
				</nav>
				<button class="header__button-desktop button button--text" data-hystmodal="#join">
					<span>Подать анкету</span>
					<span class="button__icon-wrap">
						<svg width="14" height="14" class="button__icon">
							<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
						</svg>
					</span>
				</button>
				<div class="header__burger-wrap js-mobile-nav-burger">
					<button class="mobile-nav-btn burger">
						<span class="nav-icon burger__icon"></span>
					</button>
				</div>
			</div>
		</div>
	</header>