<?php
/**
 * Карточка кейса для архива и блока результатов рейтинга.
 */
?>
<article class="experts__item white-bg">
	<div class="experts__item-pic">
		<?php
		$thumbnail = get_the_post_thumbnail(
			get_the_ID(),
			'full',
			[
				'alt' => get_the_title(),
			]
		);
		?>
		<?php if ($thumbnail) : ?>
			<?= $thumbnail; ?>
		<?php else : ?>
			<picture>
				<img src="<?= esc_url(STANDART_DIR . 'img/other/case.svg'); ?>" alt="">
			</picture>
		<?php endif; ?>
		<?php
		$terms = get_the_terms(get_the_ID(), 'cats_cases');
		if ($terms && !is_wp_error($terms)) :
			?>
			<div class="experts__item-tag tag text text--tiny text--primary text--w-medium text-center">
				<?= esc_html($terms[0]->name); ?>
			</div>
		<?php endif; ?>
	</div>
	<div class="experts__item-info">
		<h3 class="experts__item-name text text--primary text--w-bold">
			<?php the_title(); ?>
		</h3>
		<?php $description = get_field('expert_position'); ?>
		<?php if ($description) : ?>
			<div class="experts__item-position text text--small text--primary text--w-regular">
				<?= esc_html($description); ?>
			</div>
		<?php endif; ?>
		<a href="<?php the_permalink(); ?>" class="experts__item-button button button--text">
			<span>Смотреть кейс</span>
			<span class="button__icon-wrap">
				<svg width="14" height="14" class="button__icon">
					<use href="<?= esc_url(STANDART_DIR . 'img/svgsprite/sprite.symbol.svg#arrow-top-right'); ?>"></use>
				</svg>
			</span>
		</a>
	</div>
</article>
