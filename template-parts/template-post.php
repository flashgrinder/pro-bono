<?php
	global $post;
?>
<article class="news__item">
	<div class="news__item-pic">
		<?php
			$default_attr = [
				'class'	=> "",
				'alt'   => get_the_title()
			];

			echo get_the_post_thumbnail( $post->ID, 'medium', $default_attr ) ?>
		<?php
			$categories = get_the_category();

			if($categories){
				foreach($categories as $category) {
					echo '<div class="news__item-tag tag">' . $category->cat_name . '</div>';
				}
			}
		?>
	</div>
	<div class="news__item-info">
		<h3 class="news__item-title text text--large text--primary text--w-bold">
			<?php the_title(); ?>
		</h3>
		<p class="news__item-excerpt text text--small text--primary text--w-regular">
			<?php the_excerpt(); ?>
		</p>
		<div class="news__item-more">
			<a href="<?php the_permalink(); ?>" class="button button--text">
				<span>Читать полностью</span>
				<span class="button__icon-wrap">
                    <svg width="14" height="14" class="button__icon">
                        <use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
                    </svg>
                </span>
			</a>
		</div>
	</div>
</article>