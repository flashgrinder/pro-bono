<?php get_header(); ?>

<section class="experts experts--cases b-padding-70">
	<div class="experts__body container">
		<h1 class="experts__heading title title--big title--primary title--w-bold title--indent text-center">Кейсы</h1>

		<?php if (have_posts()) : ?>
			<div class="experts__items">
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('template-parts/template', 'case'); ?>
				<?php endwhile; ?>
			</div>

			<?php
			the_posts_pagination([
				'mid_size'  => 1,
				'prev_text' => '←',
				'next_text' => '→',
			]);
			?>
		<?php else : ?>
			<p class="text text--medium text--primary text--w-regular text-center">Кейсы пока не добавлены.</p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
