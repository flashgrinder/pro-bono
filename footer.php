</main>

<!-- Модалка -->
<div class="modal modal--feedback hystmodal" id="feedback" aria-hidden="true">
	<button data-hystclose class="modal__close hystmodal__close">Close</button>
	<div class="modal__wrap hystmodal__wrap">
		<div class="modal__body hystmodal__window" role="dialog" aria-modal="true">
			<div class="modal__header d-flex d-flex-column flex-justify-center">
				<div class="modal__logo">
					<img src="<?= STANDART_DIR; ?>img/raiting.svg" alt="">
				</div>
				<div class="modal__title text text--large text--primary text--w-bold text-center">
					Задать вопрос
				</div>
				<div class="modal__subtitle text text--small text--primary text--w-regular text-center">
					Если у вас возник вопрос или нужна обратная связь от представителей конкурса, заполните форму ниже
				</div>
			</div>
			<?php echo do_shortcode( '[contact-form-7 title="Задать вопрос" html_class="main-form__form form form--modal js-form-1"]' ); ?>
		</div>
	</div>
</div>

<div class="modal modal--feedback hystmodal" id="join" aria-hidden="true">
	<button data-hystclose class="modal__close hystmodal__close">Close</button>
	<div class="modal__wrap hystmodal__wrap">
		<div class="modal__body hystmodal__window" role="dialog" aria-modal="true">
			<div class="modal__header d-flex d-flex-column flex-justify-center">
				<div class="modal__logo">
					<img src="<?= STANDART_DIR; ?>img/raiting.svg" alt="">
				</div>
				<div class="modal__title text text--large text--primary text--w-bold text-center">
					Принять участие в церемонии
				</div>
				<div class="modal__subtitle text text--small text--primary text--w-regular text-center">
					Чтобы посетить мероприятие награждения, оставьте свои контактные данные в форме ниже. Мы отправим билет на почту
				</div>
			</div>
			<?php echo do_shortcode( '[contact-form-7 title="Принять участие" html_class="main-form__form form form--modal js-form-2"]' ); ?>
		</div>
	</div>
</div>

<!-- Модалка успешной отправки -->
<div class="modal modal--thanks hystmodal js-modal-success" id="thanks" aria-hidden="true">
	<button data-hystclose class="modal__close hystmodal__close">Close</button>
	<div class="modal__wrap hystmodal__wrap">
		<div class="modal__body hystmodal__window" role="dialog" aria-modal="true">
			<div class="modal__header d-flex d-flex-column flex-justify-center">
				<div class="modal__logo">
					<img src="<?= STANDART_DIR; ?>img/raiting.svg" alt="">
				</div>
				<div class="modal__title text text--large text--primary text--w-bold text-center">
					Спасибо!
				</div>
				<div class="modal__subtitle text text--small text--primary text--w-regular text-center">
					Данные успешно отправлены, мы свяжемся <br> с вами в ближайшее время!
				</div>
			</div>
			<button class="modal__thanks-btn button button--primary" data-hystclose>
				<span>Назад к сайту</span>
				<span class="button__icon-wrap">
					<svg width="14" height="14" class="button__icon">
						<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
					</svg>
				</span>
			</button>
		</div>
	</div>
</div>

<footer class="footer" id="contacts">
	<div class="footer__outer container-full">
		<div class="footer__body container white-bg">
			<div class="footer__top d-flex flex-align-center flex-justify-sb">
				<div class="footer__heading title title--big title--primary title--w-bold">
					Контакты
				</div>
				<div class="footer__contacts d-flex">
					<?php $tg_link = get_field('tg_link', 'option'); ?>
					<?php if (!empty($tg_link)) : ?>
						<?php
							$link_url = $tg_link['url'];
							$link_title = $tg_link['title'];
							$link_target = $tg_link['target'] ? $tg_link['target'] : '_self';
						?>
						<div class="footer__contact">
							<div class="footer__contact-name text text--small text--primary text--w-regular">
								Телеграм-канал
							</div>
							<a href="<?= esc_url($link_url); ?>"
							   target="<?= esc_attr($link_target); ?>"
							   class="footer__contact-link text text--pre-large text--primary text--w-regular link">
								<?= esc_html($link_title); ?>
							</a>
						</div>
					<?php endif; ?>

					<?php $email_link = get_field('email_link', 'option'); ?>
					<?php if (!empty($email_link)) : ?>
					<?php
						$link_url = $email_link['url'];
						$link_title = $email_link['title'];
						$link_target = $email_link['target'] ? $email_link['target'] : '_self';
					?>
						<div class="footer__contact">
							<div class="footer__contact-name text text--small text--primary text--w-regular">
								Адрес электронной почты
							</div>
							<a href="<?= esc_url($link_url); ?>"
							   target="<?= esc_attr($link_target); ?>"
							   class="footer__contact-link text text--pre-large text--primary text--w-regular link">
								<?= esc_html($link_title); ?>
							</a>
						</div>
					<?php endif; ?>

					<?php $phone_link = get_field('phone_link', 'option'); ?>
					<?php if (!empty($phone_link)) : ?>
					<?php
						$link_url = $phone_link['url'];
						$link_title = $phone_link['title'];
						$link_target = $phone_link['target'] ? $phone_link['target'] : '_self';
					?>
						<div class="footer__contact">
							<div class="footer__contact-name text text--small text--primary text--w-regular">
								Номер телефона
							</div>
							<a href="<?= esc_url($link_url); ?>"
							   target="<?= esc_attr($link_target); ?>"
							   class="footer__contact-link text text--pre-large text--primary text--w-regular link">
								<?= esc_html($link_title); ?>
							</a>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="footer__center">
				<div class="footer__columns d-flex flex-justify-sb">
					<div class="footer__col d-flex d-flex-column flex-justify-sb">
						<div class="footer__logos d-flex">
							<div class="footer__logo">
								<img src="<?= STANDART_DIR; ?>img/raiting.svg" alt="">
							</div>
							<div class="footer__logo">
								<img src="<?= STANDART_DIR; ?>img/logo.svg" alt="">
							</div>
						</div>
						<?php

							$link = get_field('policy', 'option');

							if( $link ):
								$link_url = $link['url'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a href="<?= esc_url($link_url); ?>" class="footer__link-policy text text--small text--primary text--w-regular link" target="<?php echo esc_attr($link_target); ?>">
									Политика обработки перс. данных
								</a>
							<?php endif; ?>
					</div>
					<div class="footer__col">
						<?php
							wp_nav_menu([
								'theme_location'  => 'footer-menu',
								'container'       => 'nav',
								'container_class' => 'footer__menu',
								'menu_class'      => '',
								'items_wrap'      => '<ul class="%2$s footer__menu-list">%3$s</ul>'
							]);
						?>
					</div>
					<div class="footer__col">
						<div class="footer__actions d-flex d-flex-column">
							<button class="button button--text" data-hystmodal="#join">
								<span>Подать заявку</span>
								<span class="button__icon-wrap">
									<svg width="14" height="14" class="button__icon">
										<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
									</svg>
								</span>
							</button>
							<button class="button button--text" data-hystmodal="#feedback">
								<span>Задать вопрос</span>
								<span class="button__icon-wrap">
									<svg width="14" height="14" class="button__icon">
										<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
									</svg>
								</span>
							</button>
							<?php $footer_doc = get_field('footer-doc'); ?>
							<?php if( $footer_doc ): ?>
								<a href="<?= $footer_doc['url']; ?>" class="button button--text" download>
									<span>Скачать положение</span>
									<span class="button__icon-wrap">
										<svg width="14" height="14" class="button__icon">
											<use href="<?= STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-top-right"></use>
										</svg>
									</span>
								</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="footer__bottom d-flex flex-justify-center">
				<div class="footer__copyright text text--small text--primary text--w-regular">
					© 2025 Все права защищены.
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
