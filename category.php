<?php get_header(); ?>

<?php the_post(); ?>
<?php $term = get_queried_object_id(); ?>
<section class="news news--index b-padding-70">
	<div class="news__body container">
		<h3 class="news__heading title title--big title--primary title--w-bold text-center">
			<? single_term_title(); ?>
		</h3>
		<div class="news__tags d-flex">
			<a href="/novosti-premii/" class="news__tag tag js-taxonomy js-category" data-taxonomy="category" data-type="post">
				Все
			</a>
			<?php
				$categories = get_terms(['taxonomy' => 'category']);

				if($categories){
					foreach($categories as $category) { ?>
						<a href="<?= get_category_link($category->term_id) ?>" class="news__tag tag <?= $term ? 'is-active' : ''; ?> js-taxonomy js-category" data-taxonomy="category" data-type="post" data-termid="<?= $category->term_id ?>"><?= $category->name ?></a>
					<?}
				}
			?>
		</div>
		<div class="news__items">
			<?php
				$term = get_queried_object_id();
				$post_list = new WP_Query(array(
					'post_type'  => 'post',
					'cat' => $term,
					'post_status' => 'publish',
					'paged'          => get_query_var('paged'),
					'orderby'     => 'date',
					'order'       => 'DESC',
					'suppress_filters' => true
				));

			?>
			<?php if( $post_list->have_posts() ) :
				while( $post_list->have_posts() ) : $post_list->the_post(); ?>

					<?php get_template_part( 'template-parts/template', 'post'); ?>

				<?php endwhile; ?>
			<?php  endif; ?>
			<?php wp_reset_query(); ?>
		</div>
		<div class="news__actions d-flex flex-justify-center">
			<button class="button button--primary">
				<span>Показать еще</span>
				<span class="button__icon-wrap">
                    <svg width="14" height="14" class="button__icon">
                        <use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
                    </svg>
                </span>
			</button>
		</div>
	</div>
</section>
<?php get_footer(); ?>