<?php get_header(); ?>

<section class="page-404 dark-bg">
	<div class="page-404__body container">
		<h1 class="page-404__title title title--white title--w-bold">
			Страница <br> не найдена
		</h1>
		<p class="page-404__subtitle text text--medium text--white text--w-medium">
			Проверьте правильность введеного адреса <br> или повторите попытку позже
		</p>
		<a href="<?= home_url(); ?>" class="page-404__button button button--secondary">
			<span>На главную</span>
			<span class="button__icon-wrap">
		        <svg width="14" height="14" class="button__icon">
		            <use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
		        </svg>
            </span>
		</a>
	</div>
</section>

<?php get_footer(); ?>