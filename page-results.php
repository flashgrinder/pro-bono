<?php /* Template Name: Результаты рейтинга */?>
<?php get_header(); ?>

<?php the_post(); ?>
<?php if( have_rows('result-slider') ): ?>
<section class="page-head page-head--slider">
	<div class="page-head__body container-full">
		<div class="page-head__splide splide js-page-head-slider">
			<div class="page-head__splide-track splide__track">
				<div class="page-head__splide-list splide__list">
					<?php while( have_rows('result-slider') ): the_row();

						$result_slider_img = get_sub_field('result-slider_img');
						$result_slider_title = get_sub_field('result-slider_title');
						$result_slider_address = get_sub_field('result-slider_address');
						$result_slider_date = get_sub_field('result-slider_date');

						?>
						<div class="page-head__splide-slide splide__slide">
							<div class="page-head__pic">
								<img src="<?php echo esc_url($result_slider_img['url']); ?>" alt="<?php echo esc_attr($result_slider_img['alt']); ?>">
							</div>
							<div class="page-head__inner-slide container d-flex flex-justify-sb">
								<div class="page-head__info">
									<?php if(!empty($result_slider_title)) : ?>
										<div class="page-head__info-title title title--huge title--white title--w-bold">
											<?= $result_slider_title; ?>
										</div>
									<?php endif; ?>
									<?php if(!empty($result_slider_address) || !empty($result_slider_date)) : ?>
										<div class="page-head__info-description">
											<div class="page-head__props">
												<?php if(!empty($result_slider_address)) : ?>
													<div class="page-head__prop">
														<div class="page-head__prop-name text text--small text--white text--w-regular">
															Адрес площадки
														</div>
														<div class="page-head__prop-value text text--pre-large text--white text--w-regular">
															<?= $result_slider_address; ?>
														</div>
													</div>
												<?php endif; ?>
												<?php if(!empty($result_slider_date)) : ?>
													<div class="page-head__prop">
														<div class="page-head__prop-name text text--small text--white text--w-regular">
															Дата
														</div>
														<div class="page-head__prop-value text text--pre-large text--white text--w-regular">
															<?= $result_slider_date; ?>
														</div>
													</div>
												<?php endif; ?>
											</div>
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="slider-nav splide__arrows">
				<button class="slider-nav__splide-arrow slider-nav__splide-arrow--prev splide__arrow splide__arrow--prev">
					<svg class="slider-nav__arrow-icon" width="24px" height="24px">
						<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-left"></use>
					</svg>
				</button>
				<button class="slider-nav__splide-arrow slider-nav__splide-arrow--next splide__arrow splide__arrow--next">
					<svg class="slider-nav__arrow-icon" width="24px" height="24px">
						<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-right"></use>
					</svg>
				</button>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<section class="experts experts--results">
	<div class="experts__body container">
		<h3 class="experts__heading title title--big title--primary title--w-bold title--indent text-center">
			<?php the_field('forever_title'); ?>
		</h3>
		<?php $forever_subtitle = get_field('forever_subtitle'); ?>
		<?php if(!empty($forever_subtitle)) : ?>
			<p class="experts__subtitle text text--medium text--primary text--w-regular text-center">
				<?= $forever_subtitle ?>
			</p>
		<?php endif; ?>
		<?php if( have_rows('result-blocks')): ?>
			<?php while( have_rows('result-blocks')) : the_row(); ?>

				<?php if( get_row_layout() == 'result-block_achievements' ): ?>
					<div class="experts__achievements">
						<h4 class="experts__result-name text text--medium text--primary text--w-medium">
							<?= get_sub_field('achievements_title'); ?>
						</h4>
						<div class="experts__items">
							<?php $experts_objects = get_sub_field('achievements_man'); ?>
							<?php if( $experts_objects ):
								foreach( $experts_objects as $post): ?>
									<?php setup_postdata($post); ?>
									<div class="experts__item white-bg js-expert-item">
										<div class="experts__item-pic">
											<?php
												$default_attr = [
													'alt'   => get_the_title()
												];

												echo get_the_post_thumbnail( $post->ID, 'full', $default_attr );
											?>
											<div class="experts__item-tooltip text text--tiny text--primary text--w-medium text-center">
												Нажмите на карточку, чтобы посмотреть цитату эксперта
											</div>
										</div>
										<div class="experts__item-info">
											<div class="experts__item-name text text--primary text--w-bold">
												<?php the_title(); ?>
											</div>
											<div class="experts__item-position text text--small text--primary text--w-regular">
												<?php the_field('expert_position'); ?>
											</div>
											<?php $expert_case = get_field('expert_case'); ?>
											<?php if (!empty($expert_case)) : ?>
												<a href="<?= $expert_case; ?>" class="experts__item-button button button--text">
													<span>Смотреть кейс</span>
													<span class="button__icon-wrap">
							                            <svg width="14" height="14" class="button__icon">
							                                <use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
							                            </svg>
							                        </span>
												</a>
											<?php endif;?>
										</div>
										<div class="experts__item-phrase text text--pre-medium text--primary text--w-medium text-center">
											“<?php the_field('expert_quote'); ?>”
										</div>
									</div>
								<?php endforeach; ?>
								<?php wp_reset_postdata(); ?>
							<?php endif;?>
						</div>
					</div>
				<?php endif; ?>

			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>

<?php $experts_special = get_field('experts_special'); ?>
<?php if( $experts_special ): ?>
<section class="experts experts--winners b-padding-70">
	<div class="experts__body container">
		<h3 class="experts__heading title title--big title--primary title--w-bold title--indent text-center">
			Победители специальных номинаций
		</h3>
		<div class="experts__items">
			<?php foreach( $experts_special as $post): ?>
				<?php setup_postdata($post); ?>
				<div class="experts__item white-bg js-expert-item">
					<div class="experts__item-pic">
						<?php
							$default_attr = [
								'alt'   => get_the_title()
							];

							echo get_the_post_thumbnail( $post->ID, 'full', $default_attr );
						?>
						<div class="experts__item-tooltip text text--tiny text--primary text--w-medium text-center">
							Нажмите на карточку, чтобы посмотреть цитату эксперта
						</div>
						<?php
							$categories = get_the_terms($post->ID, 'cats_experts');

							if( $categories[0] ) {
								echo '<div class="experts__item-tag tag text text--tiny text--primary text--w-medium text-center">' . $categories[0]->name . '</div>';
							}
						?>
					</div>
					<div class="experts__item-info">
						<div class="experts__item-name text text--primary text--w-bold">
							<?php the_title(); ?>
						</div>
						<div class="experts__item-position text text--small text--primary text--w-regular">
							<?php the_field('expert_position'); ?>
						</div>
						<?php $expert_case = get_field('expert_case'); ?>
						<?php if (!empty($expert_case)) : ?>
							<a href="<?= $expert_case; ?>" class="experts__item-button button button--text">
								<span>Смотреть кейс</span>
								<span class="button__icon-wrap">
		                            <svg width="14" height="14" class="button__icon">
		                                <use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
		                            </svg>
		                        </span>
							</a>
						<?php endif;?>
					</div>
					<div class="experts__item-phrase text text--pre-medium text--primary text--w-medium text-center">
						“<?php the_field('expert_quote'); ?>”
					</div>
				</div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>
<?php endif;?>

<?php $experts_cases = get_field('experts_cases'); ?>
<?php if( $experts_cases ): ?>
<section class="experts experts--cases b-padding-70">
	<div class="experts__body container">
		<h3 class="experts__heading title title--big title--primary title--w-bold title--indent text-center">
			Кейсы, которые отметили эксперты
		</h3>
		<div class="experts__items">
		<?php foreach( $experts_cases as $post): ?>
			<?php setup_postdata($post); ?>
				<div class="experts__item white-bg">
					<div class="experts__item-pic">
						<?php
							$default_attr = [
								'alt'   => get_the_title()
							];
							$case_img = get_the_post_thumbnail( $post->ID, 'full', $default_attr )
						?>
						<?php if (!empty($case_img)) : ?>
							<?= $case_img; ?>
						<?php else : ?>
							<picture>
								<img src="<?= STANDART_DIR; ?>img/other/case.svg" alt="">
							</picture>
						<?php endif;?>
						<?php
							$categories_case = get_the_terms($post->ID, 'cats_cases');

							if( $categories_case[0] ) {
								echo '<div class="experts__item-tag tag text text--tiny text--primary text--w-medium text-center">' . $categories_case[0]->name . '</div>';
							}
						?>
					</div>
					<div class="experts__item-info">
						<div class="experts__item-name text text--primary text--w-bold">
							<?php the_title(); ?>
						</div>
						<div class="experts__item-position text text--small text--primary text--w-regular">
							<?php the_field('expert_position'); ?>
						</div>
						<?php $expert_case = get_field('expert_case'); ?>
						<?php if (!empty($expert_case)) : ?>
							<a href="<?= $expert_case; ?>" class="experts__item-button button button--text">
								<span>Смотреть кейс</span>
								<span class="button__icon-wrap">
		                            <svg width="14" height="14" class="button__icon">
		                                <use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
		                            </svg>
		                        </span>
							</a>
						<?php endif; ?>
					</div>
				</div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>
<?php endif;?>

<?php get_footer(); ?>