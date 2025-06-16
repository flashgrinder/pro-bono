<?php /* Template Name: Главная */?>
<?php get_header(); ?>

<?php if( have_rows('main-slider') ): ?>
<section class="main-screen">
	<div class="main-screen__body container-full">
		<div class="main-screen__splide splide js-main-screen-slider">
			<div class="main-screen__splide-track splide__track">
				<div class="main-screen__splide-list splide__list">
					<?php while( have_rows('main-slider') ): the_row();

						$main_slider_img = get_sub_field('main-slider_img');
						$main_slider_title = get_sub_field('main-slider_title');
						$main_slider_description = get_sub_field('main-slider_description');

						?>
						<div class="main-screen__splide-slide splide__slide">
							<div class="main-screen__pic">
								<img src="<?= esc_url($main_slider_img['url']); ?>" alt="<?= esc_attr($main_slider_img['alt']); ?>">
							</div>
							<div class="main-screen__inner-slide container d-flex flex-justify-sb">
								<div class="main-screen__info">
									<div class="main-screen__info-title text text--white text--w-bold">
										<?= $main_slider_title; ?>
									</div>
									<?php if(!empty($main_slider_description)) : ?>
										<div class="main-screen__info-description text text--medium text--white text--w-medium">
											<?= $main_slider_description; ?>
										</div>
									<?php endif; ?>
								</div>
								<div class="main-screen__actions">
									<button class="button button--secondary" data-hystmodal="#feedback">
										<span>Как подать заявку</span>
										<span class="button__icon-wrap">
	                                        <svg width="14" height="14" class="button__icon">
	                                            <use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
	                                        </svg>
	                                    </span>
									</button>
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

<section class="conditions">
	<div class="conditions__outer container-full">
		<div class="conditions__body container white-bg">
			<h3 class="conditions__heading title title--big title--primary title--w-bold title--indent">
				<?php the_field('conditions-block-title'); ?>
			</h3>
			<p class="conditions__subtitle text text--medium text--primary text--w-regular">
				<?php the_field('conditions-block-description'); ?>
			</p>
			<div class="conditions__items">
				<div class="conditions__item gray-bg">
					<div class="conditions__item-top d-flex">
						<div class="conditions__icon d-flex flex-align-center flex-justify-center">
							<svg width="24px" height="24px">
								<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#book"></use>
							</svg>
						</div>
						<div class="conditions__number text text--pre-large text--primary text--w-regular d-flex flex-align-center flex-justify-center">
							01
						</div>
					</div>
					<div class="conditions__item-info">
						<div class="conditions__item-title text text--large text--primary text--w-bold">
							<?php the_field('conditions-step-one_title'); ?>
						</div>
						<div class="conditions__item-description text text--medium text--primary text--w-regular">
							<?php the_field('conditions-step-one_description'); ?>
						</div>
					</div>
				</div>
				<div class="conditions__item gray-bg">
					<div class="conditions__item-top d-flex">
						<div class="conditions__icon d-flex flex-align-center flex-justify-center">
							<svg width="24px" height="24px">
								<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#anketa"></use>
							</svg>
						</div>
						<div class="conditions__number text text--pre-large text--primary text--w-regular d-flex flex-align-center flex-justify-center">
							02
						</div>
					</div>
					<div class="conditions__item-info">
						<div class="conditions__item-title text text--large text--primary text--w-bold">
							<?php the_field('conditions-step-two_title'); ?>
						</div>
						<div class="conditions__item-description text text--medium text--primary text--w-regular">
							<?php the_field('conditions-step-two_description'); ?>
						</div>
					</div>
				</div>
				<div class="conditions__item dark-bg">
					<div class="conditions__item-top d-flex">
						<div class="conditions__icon d-flex flex-align-center flex-justify-center">
							<svg width="24px" height="24px">
								<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#status"></use>
							</svg>
						</div>
						<div class="conditions__number text text--pre-large text--white text--w-regular d-flex flex-align-center flex-justify-center">
							03
						</div>
					</div>
					<div class="conditions__item-info">
						<div class="conditions__item-title text text--large text--white text--w-bold">
							<?php the_field('conditions-step-three_title'); ?>
						</div>
						<div class="conditions__item-description text text--medium text--white text--w-regular">
							<?php the_field('conditions-step-three_description'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="criteria">
	<div class="criteria__outer container-full">
		<div class="criteria__body container white-bg">
			<h3 class="criteria__heading title title--big title--primary title--w-bold title--indent">
				<?php the_field('criteria-block-title'); ?>
			</h3>
			<p class="criteria__subtitle text text--medium text--primary text--w-regular">
				<?php the_field('criteria-block-description'); ?>
			</p>
			<?php $criteria_file = get_field('criteria-doc'); ?>
			<?php if( $criteria_file ): ?>
				<div class="criteria__doc gray-bg d-flex flex-align-center flex-justify-sb">
					<div class="criteria__doc-inner d-flex flex-align-center">
						<div class="criteria__doc-icon d-flex flex-align-center flex-justify-center">
							<svg width="24" height="24">
								<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#docx"></use>
							</svg>
						</div>
						<div class="criteria__doc-name text text--medium text--primary text--w-regular">
							<?= $criteria_file['filename']; ?>
						</div>
					</div>
					<a href="<?= $criteria_file['url']; ?>" class="button button--primary" download>
						<span>Скачать документ</span>
						<span class="button__icon-wrap">
		                    <svg width="14" height="14" class="button__icon">
		                        <use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
		                    </svg>
		                </span>
					</a>
				</div>
			<?php endif; ?>
			<?php if( have_rows('criteria') ): ?>
				<div class="criteria__info">
					<div class="criteria__info-title text text--medium text--primary text--w-regular">
						Критерии оценки:
					</div>
					<div class="criteria__items">
						<?php while( have_rows('criteria')) : the_row(); ?>
							<?php
								$criteria_title = get_sub_field('criteria_title')
							?>
							<div class="criteria__item d-flex gray-bg">
								<div class="criteria__item-num text text--medium text--primary text--w-regular d-flex flex-justify-center flex-align-center">
									<?= get_row_index(); ?>
								</div>
								<div class="criteria__item-info">
									<div class="criteria__item-title text text--medium text--primary text--w-medium">
										<?= $criteria_title; ?>
									</div>
									<?php if( have_rows('criteria-items') ): ?>
									<ul class="criteria__item-list text text--medium text--primary text--w-regular">
										<?php while( have_rows('criteria-items')) : the_row(); ?>
											<?php $criteria_items_name = get_sub_field('criteria-items_name'); ?>
											<li class="criteria__item-point">
												<?= $criteria_items_name; ?>
											</li>
										<?php endwhile; ?>
									</ul>
									<?php endif; ?>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="nominations-ac b-padding-top-140">
	<div class="nominations-ac__body container">
		<h3 class="nominations-ac__heading title title--big title--primary title--w-bold text-center">
			<?php the_field('nominations-ac-block-title'); ?>
		</h3>
		<div class="nominations-ac__columns">
			<?php if( have_rows('nominations-ac-left') ): ?>
				<div class="nominations-ac__accordion accordion js-accordion js-accordion-1">
					<?php while( have_rows('nominations-ac-left') ): the_row();

						$nominations_ac_left_name = get_sub_field('nominations-ac-left_name');
						$nominations_ac_left_description = get_sub_field('nominations-ac-left_description');

						?>
						<div class="nominations-ac__accordion-item accordion__item js-accordion-item">
							<h3 class="nominations-ac__accordion-title accordion__title js-accordion-title text text--medium text--primary text--w-medium">
								<?= $nominations_ac_left_name; ?>
								<span class="nominations-ac__accordion-icon accordion__icon">
									<svg class="accordion__svg-arrow" width="24px" height="24px">
										<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-down"></use>
									</svg>
									<svg class="accordion__svg-close" width="24px" height="24px">
										<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#close"></use>
									</svg>
								</span>
							</h3>
							<div class="nominations-ac__accordion-text accordion__text d-flex">
								<div class="accordion__wysiwyg wysiwyg wysiwyg--accordion">
									<?= $nominations_ac_left_description; ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php if( have_rows('nominations-ac-right') ): ?>
				<div class="nominations-ac__accordion accordion js-accordion js-accordion-2">
					<?php while( have_rows('nominations-ac-right') ): the_row();

						$nominations_ac_right_name = get_sub_field('nominations-ac-right_name');
						$nominations_ac_right_description = get_sub_field('nominations-ac-right_description');

						?>
						<div class="nominations-ac__accordion-item accordion__item js-accordion-item">
						<h3 class="nominations-ac__accordion-title accordion__title js-accordion-title text text--medium text--primary text--w-medium">
							<?= $nominations_ac_right_name; ?>
							<span class="nominations-ac__accordion-icon accordion__icon">
								<svg class="accordion__svg-arrow" width="24px" height="24px">
									<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-down"></use>
								</svg>
								<svg class="accordion__svg-close" width="24px" height="24px">
									<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#close"></use>
								</svg>
							</span>
						</h3>
						<div class="nominations-ac__accordion-text accordion__text d-flex">
							<div class="accordion__wysiwyg wysiwyg wysiwyg--accordion">
								<?= $nominations_ac_right_description; ?>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php $result = get_field('result'); ?>
<?php if (!empty($result)) : ?>
<section class="info b-padding-70">
	<div class="info__body container">
		<div class="info__decor-wrap d-flex flex-justify-center flex-align-center">
			<span class="info-decor__line info-decor__line--left"></span>
			<div class="info__decor d-flex flex-justify-center flex-align-center">
				<svg width="20" height="20" class="info__decor-icon">
					<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
				</svg>
			</div>
			<span class="info-decor__line"></span>
		</div>
		<h3 class="info__heading title title--big title--w-bold text-center">
			<?= $result; ?>
		</h3>
	</div>
</section>
<?php endif; ?>

<section class="nominations b-padding-70">
	<div class="nominations__body container">
		<h3 class="nominations__heading title title--big title--primary title--w-bold title--indent text-center">
			<?php the_field('nominations-block-title'); ?>
		</h3>
		<p class="nominations__subtitle text text--medium text--primary text--w-regular text-center">
			<?php the_field('nominations-block-description'); ?>
		</p>
		<?php if( have_rows('nominations') ): ?>
			<div class="nominations__items">
				<?php while( have_rows('nominations') ): the_row();

					$nominations_name = get_sub_field('nominations_name');

					?>
					<div class="nominations__item text text--medium text--primary text--w-medium">
						<?= $nominations_name; ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
		<?php $file = get_field('nominations-doc'); ?>
		<?php if( $file ): ?>
			<div class="nominations__doc white-bg d-flex flex-align-center flex-justify-sb">
				<div class="nominations__doc-inner d-flex flex-align-center">
					<div class="nominations__doc-icon d-flex flex-align-center flex-justify-center">
						<svg width="24" height="24">
							<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#docx"></use>
						</svg>
					</div>
					<div class="nominations__doc-name text text--medium text--primary text--w-regular">
						<?= $file['filename']; ?>
					</div>
				</div>
				<a href="<?= $file['url']; ?>" class="nominations__button button button--primary" download>
					<span>Скачать документ</span>
					<span class="button__icon-wrap">
						<svg width="14" height="14" class="button__icon">
							<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
						</svg>
					</span>
				</a>
			</div>
		<?php endif; ?>
		<div class="nominations__actions d-flex flex-align-center flex-justify-center" data-hystmodal="#join">
			<button class="nominations__button button button--primary">
				<span>Подать анкету</span>
				<span class="button__icon-wrap">
					<svg width="14" height="14" class="button__icon">
						<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
					</svg>
				</span>
			</button>
			<button class="nominations__button button button--primary" data-hystmodal="#feedback">
				<span>Задать вопрос</span>
				<span class="button__icon-wrap">
					<svg width="14" height="14" class="button__icon">
						<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
					</svg>
				</span>
			</button>
		</div>
	</div>
</section>

<?php $post_object = get_field('main_expert'); ?>
<?php if( $post_object ): ?>
	<section class="council b-padding-70">
		<div class="council__body container">
			<h3 class="council__heading title title--big title--primary title--w-bold title--indent text-center">
				<?php the_field('main_expert_title'); ?>
			</h3>
			<?php $main_expert_description = get_field('main_expert_description'); ?>
			<?php if (!empty($main_expert_description)) : ?>
				<p class="council__subtitle text text--medium text--primary text--w-regular text-center">
					<?= $main_expert_description; ?>
				</p>
			<?php endif; ?>
			<?php
				$post = $post_object;
				setup_postdata( $post );
			?>
			<div class="council__expert white-bg">
				<div class="council__expert-photo">
					<?php
						$default_attr = [
							'alt'   => get_the_title()
						];

						echo get_the_post_thumbnail( $post->ID, 'full', $default_attr );
					?>
				</div>
				<div class="council__expert-info">
					<div class="council__expert-title text text--large text--primary text--w-bold">
						<?php the_title(); ?>
					</div>
					<div class="council__expert-subtitle text text--small text--primary text--w-regular">
						<?php the_field('expert_position'); ?>
					</div>
					<div class="council__expert-excerpt text text--pre-medium text--primary text--w-regular">
						<?php the_field('expert_quote'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php $result_raiting = get_field('result-raiting'); ?>
<?php if (!empty($result_raiting)) : ?>
<section class="info b-padding-70">
	<div class="info__body container">
		<div class="info__decor-wrap d-flex flex-justify-center flex-align-center">
			<span class="info-decor__line info-decor__line--left"></span>
			<div class="info__decor d-flex flex-justify-center flex-align-center">
				<svg width="20" height="20" class="info__decor-icon">
					<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#plus"></use>
				</svg>
			</div>
			<span class="info-decor__line"></span>
		</div>
		<h3 class="info__heading title title--big title--w-bold text-center">
			<?= $result_raiting; ?>
		</h3>
		<div class="info__actions d-flex flex-justify-center">
			<button class="button button--primary" data-hystmodal="#join">
				<span>Подать заявку</span>
				<span class="button__icon-wrap">
                <svg width="14" height="14" class="button__icon">
                    <use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
                </svg>
            </span>
			</button>
		</div>
	</div>
</section>
<?php endif; ?>

<section class="news b-padding-70">
	<div class="news__body container">
		<h3 class="news__heading title title--big title--primary title--w-bold title--indent">
			Новости
		</h3>
		<div class="news__items-wrap">
			<div class="news__splide splide js-news-slider">
				<div class="news__splide-track splide__track">
					<div class="news__splide-list splide__list">
						<?php
							global $post;
							$post_list = new WP_Query(array(
								'post_type'  => 'post',
								'post_status' => 'publish',
								'paged'          => get_query_var('paged'),
								'orderby'     => 'date',
								'order'       => 'DESC',
								'suppress_filters' => true
							));

						?>

						<?php if( $post_list->have_posts() ) : ?>
							<?php while( $post_list->have_posts() ) : $post_list->the_post(); ?>
								<div class="news__splide-slide splide__slide">

									<?php get_template_part( 'template-parts/template', 'post'); ?>

								</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php  endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="news__actions d-flex flex-justify-center">
			<a href="/novosti-premii/" class="button button--primary">
				<span>Смотреть все</span>
				<span class="button__icon-wrap">
	                <svg width="14" height="14" class="button__icon">
	                    <use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
	                </svg>
	            </span>
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>