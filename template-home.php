<?php
/*
Template Name: Главная (новый дизайн)
Template Post Type: page
*/

include 'header.php';
?>
<div class="nd">

	<!-- Hero -->
	<?php get_template_part('template-parts/hero/hero'); ?>

	<!-- Ideas section -->
	<section class="nd-pt-lg nd-pb-lg nd-pb-mob-md">
		<div class="container-xxl">
			<h2 class="nd-title mb-3 mb-lg-4">Воплотим в жизнь вашу мебельную идею</h2>
			<div class="row g-4">
				<!-- Видео -->
				<div class="col-lg-6">
					<div class="nd-ideas__main position-relative d-flex flex-column align-items-start gap-1 h-100 p-3 overflow-hidden bg-secondary-subtle">
						<video class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/idea.mp4?v=2" poster="<?php echo get_stylesheet_directory_uri(); ?>/img/home/idea-1.webp" autoplay muted loop playsinline preload="metadata"></video>
						<span class="position-relative d-lg-none px-2 py-1 rounded-pill bg-white small">Разные стили</span>
						<span class="position-relative d-lg-none px-2 py-1 rounded-pill bg-white small">Современные материалы</span>
						<span class="position-relative d-lg-none px-2 py-1 rounded-pill bg-white small">Надежная фурнитура</span>
					</div>
				</div>

				<!-- Карточки -->
				<div class="col-lg-6 d-flex flex-column gap-4">
					<a href="<?php echo home_url('/кухни-на-заказ/'); ?>" class="nd-ideas__card nd-zoom position-relative d-flex align-items-end p-3 overflow-hidden">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/idea-2.webp" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="">
						<span class="position-relative col-12 col-lg-7 px-2 py-1 bg-white bg-opacity-75 nd-text-lg fw-medium text-body">Кухни на заказ по индивидуальным размерам</span>
					</a>
					<a href="<?php echo home_url('/шкафы-на-заказ/'); ?>" class="nd-ideas__card nd-zoom position-relative d-flex align-items-end p-3 overflow-hidden">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/idea-3.webp" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="">
						<span class="position-relative col-12 col-lg-7 px-2 py-1 bg-white bg-opacity-75 nd-text-lg fw-medium text-body">Шкафы-купе и распашные шкафы на заказ</span>
					</a>
				</div>
			</div>
			<a href="#quiz" class="btn nd-btn d-flex d-lg-none mt-4 js-calc">Рассчитать стоимость</a>
		</div>
	</section>
	<!-- /Ideas section -->

	<!-- Quiz -->
	<div class="nd-quiz">
		<button type="button" class="nd-quiz__close" aria-label="Закрыть"></button>
		<?php get_template_part('template-parts/quiz/quiz', null, array(
            'class' => 'quiz-section--new'
        )); ?>
	</div>
	<!-- /Quiz -->

	<!-- Section New Works -->
	<?php get_template_part('template-parts/new-works/new-works', null, array(
        'section_title' => 'Последние выполненные работы',
        'posts_count' => 6
    )); ?>

	<!-- About section -->
	<section class="nd-pt-md nd-pb-lg">
		<div class="container-xxl">
			<h2 class="nd-title mb-3 mb-lg-4">О нас</h2>
			<div class="row g-4">
				<!-- Фотографии -->
				<div class="col-lg-5">
					<div class="row g-2">
						<div class="col-12">
							<div class="nd-about__photo ratio">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/about-1.webp" class="object-fit-cover" loading="lazy" alt="Салон Мозаика">
							</div>
						</div>
						<div class="col-6 d-none d-lg-block">
							<div class="ratio" style="--bs-aspect-ratio: 117%;">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/about-2.webp" class="object-fit-cover" loading="lazy" alt="Кухня в салоне">
							</div>
						</div>
						<div class="col-6 d-none d-lg-block">
							<div class="ratio" style="--bs-aspect-ratio: 117%;">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/about-3.webp" class="object-fit-cover" loading="lazy" alt="Подбор материалов">
							</div>
						</div>
					</div>
				</div>

				<!-- Описание -->
				<div class="col-lg-7 d-flex flex-column gap-4">
					<div class="nd-about__text d-flex flex-column gap-3 gap-lg-4 nd-text text-body-secondary">
						<p>Мы верим, что кухня — это не просто набор шкафов и столешница. Это сердце дома, место, где начинаются уютные завтраки и собираются самые близкие люди. Именно поэтому с 2017 года студия «Мозаика» помогает нашим клиентам воплощать в жизнь кухни их мечты.</p>

						<!-- Кнопка "Читать дальше" -->
						<button type="button" class="nd-more collapsed d-flex d-lg-none align-items-center align-self-start fs-6 fw-medium text-success" data-bs-toggle="collapse" data-bs-target="#nd-about-hidden" aria-controls="nd-about-hidden" aria-expanded="false">
							<span class="nd-more__closed">Читать дальше</span>
							<span class="nd-more__opened">Свернуть</span>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-chevron.svg" width="24" height="24" alt="">
						</button>

						<!-- Скрытый на мобильных текст -->
						<div class="collapse d-lg-block" id="nd-about-hidden">
							<div class="d-flex flex-column gap-3 gap-lg-4">
								<div class="d-flex flex-column gap-3">
									<h3 class="nd-text-lg fw-semibold text-body">Почему нам доверяют?</h3>
									<div class="d-flex gap-3">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-trust-1.svg" class="flex-shrink-0" width="40" height="40" alt="">
										<div>
											<h4 class="nd-text-md mb-2 fw-medium text-success">Официальное качество</h4>
											<p class="nd-text-sm">Мы являемся официальным представителем мебельной фабрики «Cucina» (г.&nbsp;Ульяновск). Это значит, что вы получаете мебель заводского качества с гарантией надежности и долговечности.</p>
										</div>
									</div>
									<div class="d-flex gap-3">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-trust-2.svg" class="flex-shrink-0" width="40" height="40" alt="">
										<div>
											<h4 class="nd-text-md mb-2 fw-medium text-success">Индивидуальный подход</h4>
											<p class="nd-text-sm">Мы не работаем по шаблонам. Каждая кухня в «Мозаике» создается по вашим размерам, с учетом особенностей планировки и ваших личных предпочтений. Сложные углы, нестандартные ниши или необычные дизайнерские решения — для нас это не проблема, а интересная задача.</p>
										</div>
									</div>
									<div class="d-flex gap-3">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-trust-3.svg" class="flex-shrink-0" width="40" height="40" alt="">
										<div>
											<h4 class="nd-text-md mb-2 fw-medium text-success">Свобода выбора</h4>
											<p class="nd-text-sm">В нашем каталоге представлен огромный выбор материалов, фактур и цветовых решений. Мы подберем идеальный вариант под любой бюджет — от лаконичных и доступных моделей до премиальных решений.</p>
										</div>
									</div>
								</div>
								<p>За годы работы мы поняли главное: идеальная кухня — это та, которая создана специально для вас. Приходите в студию «Мозаика», и давайте вместе спроектируем пространство, в котором вам будет по-настоящему комфортно.</p>
							</div>
						</div>
					</div>

					<!-- Цифры -->
					<div class="d-flex gap-2 gap-lg-4 text-body-secondary">
						<div class="col d-flex flex-column ps-2 border-start">
							<strong class="display-1 fw-normal lh-1 text-success">&gt;2000</strong>
							<span class="nd-text-sm">Проектов</span>
						</div>
						<div class="col d-flex flex-column ps-2 border-start">
							<strong class="display-1 fw-normal lh-1 text-success">24<small class="fs-1">/7</small></strong>
							<span class="nd-text-sm">Поддержка</span>
						</div>
						<div class="col d-flex flex-column ps-2 border-start">
							<strong class="display-1 fw-normal lh-1 text-success">9<small class="fs-1">+</small></strong>
							<span class="nd-text-sm">лет опыта</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /About section -->

	<!-- CTA section -->
	<section class="nd-cta nd-cover nd-pt-lg nd-pb-lg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/home/cta-bg.webp);">
		<div class="container-xxl">
			<div class="col-lg-8 d-flex flex-column align-items-center gap-3 p-3 bg-body-tertiary bg-opacity-75 text-center">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/logo-green.png" class="nd-cta__logo" width="229" height="70" alt="Кухни Мозаика">
				<h2 class="nd-title">Интерьер в котором хочется жить</h2>
				<p class="nd-text-md col-lg-10">Проектируем и изготавливаем мебель на заказ. От идеи до установки — под ключ, с заботой о вашем пространстве.</p>
				<div class="d-flex flex-column flex-lg-row align-items-center justify-content-between gap-3 w-100">
					<a href="#" class="btn nd-btn nd-btn--fluid" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</a>

					<!-- Мессенджеры -->
					<div class="nd-cta__messengers d-flex justify-content-between align-self-stretch align-self-lg-center gap-1 px-lg-3 py-lg-2 rounded-pill">
						<a href="https://t.me/+79511014610" target="_blank" class="d-flex align-items-center gap-2 px-lg-3 py-lg-2 rounded-pill nd-text-sm fw-medium text-body">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/tg.png" width="30" height="30" alt="">Telegram
						</a>
						<a href="https://max.ru/u/f9LHodD0cOJ43FcHRXMZDl7Pj6Znjki8fXkN8cmXFNxOU9f0FntW8dTdUis" target="_blank" class="d-flex align-items-center gap-2 px-lg-3 py-lg-2 rounded-pill nd-text-sm fw-medium text-body">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/max.png" width="30" height="30" alt="">Max
						</a>
						<a href="https://wa.me/79511014610?web=1&app_absent=1" target="_blank" class="d-flex align-items-center gap-2 px-lg-3 py-lg-2 rounded-pill nd-text-sm fw-medium text-body">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/wa.png" width="30" height="30" alt="">Whatsapp
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /CTA section -->

	<!-- New reviews section -->
	<?php get_template_part('template-parts/new-reviews-section/new-reviews-section'); ?>

	<!-- Как мы работаем -->
	<?php get_template_part('template-parts/new-steps/new-steps'); ?>

	<!-- Action -->
	<?php get_template_part('template-parts/new-action/new-action'); ?>

	<!-- Frequent questions -->
	<?php get_template_part('template-parts/new-faq/new-faq'); ?>

	<!-- SECTION ORDER -->
	<section class="nd-order nd-cover nd-pb-lg">
		<div class="container-xxl">
			<div class="row g-4 align-items-start">
				<!-- Описание -->
				<div class="col-lg-5 d-flex flex-column gap-3 gap-lg-4 text-center text-lg-start">
					<h2 class="nd-title text-lg-start">Не определились <br class="d-lg-none">с&nbsp;выбором? <br class="d-lg-none">Поможем</h2>
					<p class="nd-text-md">Ответьте на несколько вопросов —<br> и мы подберём оптимальное решение<br> для вашего интерьера.</p>
					<ul class="d-none d-lg-flex flex-column gap-1 list-unstyled nd-text-md lh-sm text-body-secondary">
						<li class="d-flex align-items-center gap-3 p-2">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-adv-1.svg" width="40" height="40" alt="">
							<span>Бесплатная<br>консультация</span>
						</li>
						<li class="d-flex align-items-center gap-3 p-2">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-adv-2.svg" width="40" height="40" alt="">
							<span>Дизайн проект<br>в&nbsp;подарок</span>
						</li>
						<li class="d-flex align-items-center gap-3 p-2">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-adv-3.svg" width="40" height="40" alt="">
							<span>Гарантия на<br>мебель 2 года</span>
						</li>
					</ul>
				</div>

				<!-- Форма -->
				<div class="col-lg-7">
					<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/choice-mail.php" class="nd-form p-3 p-lg-4 rounded-1 bg-white">
						<div class="row g-3">
							<div class="col-lg-6">
								<label class="form-label nd-text-md mb-1" for="nd-order-name">Как вас зовут?*</label>
								<input type="text" name="name" id="nd-order-name" class="form-control nd-text-md py-2" required>
							</div>
							<div class="col-lg-6">
								<label class="form-label nd-text-md mb-1" for="nd-order-tel">Номер телефона*</label>
								<input type="text" name="tel" id="nd-order-tel" class="form-control nd-text-md py-2 telMask" required>
							</div>
							<div class="col-lg-6">
								<label class="form-label nd-text-md mb-1" for="nd-order-furniture">Что подбираете?*</label>
								<select name="furniture" id="nd-order-furniture" class="form-select nd-text-md py-2" required>
									<option>Кухню</option>
									<option>Шкаф</option>
									<option>Гардеробную</option>
									<option>Прихожую</option>
									<option>Детскую</option>
									<option>Другое</option>
								</select>
							</div>
							<div class="col-lg-6 d-lg-none">
								<label class="form-label nd-text-md mb-1" for="nd-order-need">Что нужно?</label>
								<select name="need" id="nd-order-need" class="form-select nd-text-md py-2">
									<option>на заказ</option>
									<option>из наличия</option>
								</select>
							</div>
							<div class="col-12">
								<label class="form-label nd-text-md mb-1" for="nd-order-comment">Комментарий (не обязательно)</label>
								<textarea name="comment" id="nd-order-comment" class="form-control nd-text-md py-2" rows="2"></textarea>
							</div>
							<div class="col-12">
								<label class="d-flex gap-2 small text-body-secondary">
									<input type="checkbox" class="form-check-input flex-shrink-0 mt-0" checked required>
									<span>Я ознакомлен (- на) с <a href="<?php echo home_url('/политика-конфиденциальности/'); ?>" target="_blank" class="text-success">политикой конфиденциальности</a> и даю согласие на обработку персональных данных</span>
								</label>
							</div>
							<div class="col-12 text-center">
								<input type="hidden" id="g-recaptcha-response-order-2" name="g-recaptcha-response">
								<button type="submit" class="btn nd-btn nd-btn--fluid">Отправить заявку</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- /SECTION ORDER -->

</div>

<?php include 'footer-1.php'; ?>
