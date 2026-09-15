<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<article class="post">
		<div class="post__back">
			<button class="post__back-button d-flex flex-align-center" onclick="window.history.go(-1); return false;">
				<svg width="24" height="24" class="post__button-back-icon">
					<use href="<?= esc_url(STANDART_DIR . 'img/svgsprite/sprite.symbol.svg#arrow-left-dark'); ?>"></use>
				</svg>
				<span>Назад</span>
			</button>
		</div>
		<div class="post__body">
			<div class="post__meta">
				<div class="post__pic">
					<?php if (has_post_thumbnail()) : ?>
						<?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
					<?php endif; ?>
					<?php
					$terms = get_the_terms(get_the_ID(), 'cats_cases');
					if ($terms && !is_wp_error($terms)) :
						foreach ($terms as $term) :
							?>
							<div class="post__tag tag"><?= esc_html($term->name); ?></div>
							<?php
						endforeach;
					endif;
					?>
				</div>
			</div>
			<div class="post__content">
				<h1 class="post__title text text--large text--primary text--w-bold text-center"><?php the_title(); ?></h1>
				<div class="post__wysiwyg wysiwyg"><?php the_content(); ?></div>
			</div>
		</div>
	</article>
<?php endwhile; ?>

<?php get_footer(); ?>
