<?php /* Template Name: Экспертный совет */?>
<?php get_header(); ?>

<?php the_post(); ?>
<section class="page-head">
	<div class="page-head__outer container-full">
		<div class="page-head__body container" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>')">
			<h1 class="page-head__heading title title--huge title--white title--w-bold">
				<?php the_title(); ?>
			</h1>
		</div>
	</div>
</section>

<?php $post_object = get_field('main_expert'); ?>
<?php if( $post_object ): ?>
	<?php
		$post = $post_object;
		setup_postdata( $post );
	?>
		<section class="council council--page b-padding-70">
			<div class="council__body container">
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

<section class="experts b-padding-70">
	<div class="experts__body container">
		<h3 class="experts__heading title title--big title--primary title--w-bold title--indent text-center">
			<?php the_field('title_experts'); ?>
		</h3>
		<p class="experts__subtitle text text--medium text--primary text--w-regular text-center">
			<?php the_field('subtitle_experts'); ?>
		</p>
		<div class="experts__items">
			<?php $experts_objects = get_field('experts_council'); ?>
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
</section>

<?php get_footer(); ?>