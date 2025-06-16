<?php get_header(); ?>

<?php the_post(); ?>
<article class="post">
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
		<div class="post__meta">
			<div class="post__pic">
				<?php
					$default_attr = [
						'alt'   => get_the_title()
					];

					echo get_the_post_thumbnail( $post->ID, 'full', $default_attr );
				?>
				<?php
					$categories = get_the_category();

					if($categories){
						foreach($categories as $category) {
							echo '<div class="post__tag tag">' . $category->cat_name . '</div>';
						}
					}
				?>
			</div>
		</div>
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
<?php wp_reset_query(); ?>

<?php
	global $wp_query;
	$post_id = $wp_query->get_queried_object_id();
	$post_list = new WP_Query(array(
		'post__not_in' => [$post_id],
		'post_type'  => 'post',
		'posts_per_page' => 8,
		'post_status' => 'publish',
		'paged'          => get_query_var('paged'),
		'orderby'     => 'date',
		'order'       => 'DESC',
		'suppress_filters' => true
	));

?>
<?php if( $post_list->have_posts() ) : ?>
<section class="news b-padding-70">
	<div class="news__body container">
		<h3 class="news__heading title title--big title--primary title--w-bold title--indent">
			Похожие новости
		</h3>
		<div class="news__items-wrap">
			<div class="news__splide splide js-news-slider">
				<div class="news__splide-track splide__track">
					<div class="news__splide-list splide__list">
						<?php while( $post_list->have_posts() ) : $post_list->the_post(); ?>
							<div class="news__splide-slide splide__slide">
								<?php get_template_part( 'template-parts/template', 'post'); ?>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
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
<?php  endif; ?>

<?php get_footer(); ?>
