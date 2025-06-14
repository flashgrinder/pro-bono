<?php get_header(); ?>

<?php the_post(); ?>
<article class="post post--policy">
	<div class="post__back">
		<button class="post__back-button d-flex flex-align-center" onclick="window.history.go(-1); return false;">
			<svg width="24" height="24" class="post__button-back-icon">
				<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-left-dark"></use>
			</svg>
			<span>
                Назад
            </span>
		</button>
	</div>
	<div class="post__body">
		<div class="post__content">
			<h1 class="post__title text text--large text--primary text--w-bold text-center">
				<?php the_title(); ?>
			</h1>
			<div class="post__wysiwyg wysiwyg">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</article>

<?php get_footer(); ?>