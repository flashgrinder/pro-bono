<?php get_header(); ?>

<section class="news news--index b-padding-70">
	<div class="news__body container">
		<h3 class="news__heading title title--big title--primary title--w-bold text-center">
			<?php echo get_the_title(get_option('page_for_posts', true)); ?>
		</h3>
		<div class="news__tags d-flex">
			<a href="javascript:;" class="news__tag tag js-taxonomy js-category is-active" data-taxonomy="category" data-type="post">
				Все
			</a>
			<?php
				$categories = get_terms(['taxonomy' => 'category']);

				if($categories){
					foreach($categories as $category) {
						echo '<a href="'. get_category_link($category->term_id) . '" class="news__tag tag js-taxonomy js-category" data-taxonomy="category" data-type="post" data-termid="'.  $category->term_id.'">' . $category->name . '</a>';
					}
				}
			?>
		</div>
		<div class="news__items"">
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

					<?php get_template_part( 'template-parts/template', 'post'); ?>

				<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php  endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>