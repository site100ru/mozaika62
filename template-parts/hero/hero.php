<?php
$img = get_stylesheet_directory_uri() . '/img/home';

$locations = get_nav_menu_locations();
$menu      = wp_get_nav_menu_items( $locations['nd-header'] ?? 0 ) ?: [];
?>
<!-- Hero -->
<section class="nd-hero position-relative">
	<!-- Header -->
	<header class="nd-header text-white">
		<!-- Header nav top -->
		<div class="nd-px d-none d-xl-flex align-items-center justify-content-between py-2">
			<div class="d-flex gap-5 small">
				<span class="d-flex align-items-center gap-2">
					<img src="<?php echo $img; ?>/ico-pin-white.svg" width="20" height="22" alt="">
					гор. Рязань, ул. Чапаева, 56
				</span>
				<span class="d-flex align-items-center gap-2">
					<img src="<?php echo $img; ?>/ico-clock-white.svg" width="20" height="22" alt="">
					Пн-Сб: с 10:00-19:00 Вс: с 10:00-17:00
				</span>
			</div>
			<a href="#" class="nd-dotted nd-text text-white" data-bs-toggle="modal" data-bs-target="#callbackModal">Обратный звонок</a>
		</div>

		<!-- /Header nav top -->

		<!-- Header nav bottom -->
		<div class="nd-px d-none d-xl-flex align-items-center justify-content-between gap-4 py-1">
			<a href="<?php echo home_url( '/' ); ?>" class="col">
				<img src="<?php echo $img; ?>/logo-header.png" class="d-block" width="220" height="69" alt="Кухни Мозаика">
			</a>

			<nav class="d-flex align-items-center gap-3 gap-xxl-4">
				<?php foreach ( $menu as $item ) : ?>
					<?php if ( $item->menu_item_parent ) continue; // На десктопе — только пункты верхнего уровня ?>
					<?php $accent = in_array( 'accent', $item->classes, true ); ?>
					<a href="<?php echo esc_url( $item->url ); ?>" class="nd-header__link nd-fade fw-medium text-uppercase text-nowrap <?php echo $accent ? 'px-2 py-1 rounded-pill bg-white text-success' : 'text-white'; ?>"><?php echo esc_html( $item->title ); ?></a>
				<?php endforeach; ?>
			</nav>

			<div class="col d-flex align-items-center justify-content-end gap-3">
				<a href="tel:+74912777098" class="nd-header__city fs-5 fw-semibold text-white text-nowrap">8 (4912) 77-70-98</a>
				<a href="tel:89511014610" class="fs-5 fw-semibold text-white text-nowrap">8 (951) 101-46-10</a>
				<div class="d-flex gap-2">
					<a href="https://max.ru/u/f9LHodD0cOJ43FcHRXMZDl7Pj6Znjki8fXkN8cmXFNxOU9f0FntW8dTdUis" target="_blank" class="nd-fade"><img src="<?php echo $img; ?>/max.png" class="d-block" width="40" height="40" alt="Max"></a>
					<a href="https://t.me/+79511014610" target="_blank" class="nd-fade"><img src="<?php echo $img; ?>/tg.png" class="d-block" width="40" height="40" alt="Telegram"></a>
				</div>
			</div>
		</div>

		<!-- /Header nav bottom -->

		<!-- Mobile menu -->
		<div class="nd-header__bar d-xl-none bg-white text-body">
			<div class="container-xxl d-flex align-items-center justify-content-between gap-2 py-2">
				<!-- Логотип -->
				<a href="<?php echo home_url( '/' ); ?>" class="flex-shrink-0">
					<img src="<?php echo $img; ?>/logo-green.png" class="d-block" width="160" height="49" alt="Кухни Мозаика">
				</a>

				<!-- Бургер -->
				<button type="button" class="flex-shrink-0 collapsed" data-bs-toggle="collapse" data-bs-target="#nd-drawer" aria-controls="nd-drawer" aria-expanded="false" aria-label="Меню">
					<img src="<?php echo $img; ?>/ico-burger.svg" width="35" height="24" alt="">
				</button>
			</div>

			<!-- Выпадающее меню: пункты из меню «Шапка (новый дизайн)», вложенные пункты раскрываются по клику -->
			<div class="nd-drawer collapse position-absolute top-100 start-0 end-0 bg-white shadow" id="nd-drawer">
				<div class="container-xxl d-flex flex-column gap-3 pt-2 pb-4">
					<nav class="d-flex flex-column gap-3 nd-text-sm fw-medium text-uppercase">
						<?php foreach ( $menu as $item ) : ?>
							<?php if ( $item->menu_item_parent ) continue; ?>
							<?php $children = array_filter( $menu, fn( $child ) => (int) $child->menu_item_parent === $item->ID ); ?>
							<?php if ( $children ) : ?>
								<!-- <?php echo esc_html( $item->title ); ?> с подменю -->
								<div>
									<button type="button" class="nd-drawer__toggle collapsed d-flex align-items-center gap-2 fw-medium text-uppercase text-body" data-bs-toggle="collapse" data-bs-target="#nd-drawer-<?php echo $item->ID; ?>" aria-expanded="false"><?php echo esc_html( $item->title ); ?></button>
									<div class="collapse" id="nd-drawer-<?php echo $item->ID; ?>">
										<div class="nd-drawer__sub d-flex flex-column gap-2 pt-2 ps-3">
											<?php foreach ( $children as $child ) : ?>
												<a href="<?php echo esc_url( $child->url ); ?>" class="text-body-secondary"><?php echo esc_html( $child->title ); ?></a>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
							<?php else : ?>
								<a href="<?php echo esc_url( $item->url ); ?>" class="text-body"><?php echo esc_html( $item->title ); ?></a>
							<?php endif; ?>
						<?php endforeach; ?>
					</nav>

					<!-- Контакты -->
					<div class="d-flex flex-column gap-2 nd-text-xs text-body-secondary">
						<span class="d-flex align-items-center gap-2">
							<img src="<?php echo $img; ?>/ico-pin.svg" width="16" height="18" alt="">
							г. Рязань, ул. Чапаева, 56
						</span>
						<a href="tel:+74912777098" class="nd-text-sm fw-medium text-body">8 (4912) 77-70-98</a>
						<a href="tel:89511014610" class="nd-text-sm fw-medium text-body">8 (951) 101-46-10</a>
						<span class="d-flex align-items-center gap-2">
							<img src="<?php echo $img; ?>/ico-calendar.svg" width="16" height="18" alt="">
							Пн-Сб: с 10:00-19:00, Вс: с 10:00-17:00
						</span>
					</div>

					<!-- Мессенджеры -->
					<div class="d-flex gap-3">
						<a href="https://wa.me/79511014610?web=1&app_absent=1" target="_blank" class="nd-fade"><img src="<?php echo $img; ?>/wa.png" class="d-block" width="40" height="40" alt="WhatsApp"></a>
						<a href="https://t.me/+79511014610" target="_blank" class="nd-fade"><img src="<?php echo $img; ?>/tg.png" class="d-block" width="40" height="40" alt="Telegram"></a>
						<a href="https://max.ru/u/f9LHodD0cOJ43FcHRXMZDl7Pj6Znjki8fXkN8cmXFNxOU9f0FntW8dTdUis" target="_blank" class="nd-fade"><img src="<?php echo $img; ?>/max.png" class="d-block" width="40" height="40" alt="Max"></a>
					</div>

					<a href="#" class="btn nd-btn w-100" data-bs-toggle="modal" data-bs-target="#callbackModal">Вызвать замерщика</a>
				</div>
			</div>
		</div>
		<!-- End mobile menu -->
	</header>
	<!-- /Header -->

	<div class="nd-hero__body position-relative d-flex flex-column align-items-center text-white">
		<?php get_template_part( 'template-parts/hero-slider/hero-slider', null, [ 'part' => 'slides' ] ); ?>

		<div class="nd-hero__content position-relative d-flex flex-column align-items-center px-3 text-center">
			<h1 class="nd-title nd-hero__title">Корпусная мебель по индивидуальным размерам на заказ от производителя</h1>
			<p class="nd-hero__lead nd-text-lg mt-3 mt-lg-4">Изготовим качественную корпусную мебель с учётом ваших пожеланий и особенностей помещения по разумной цене! Рассчитаем стоимость за 15 минут.</p>
			<a href="#quiz" class="btn nd-btn nd-btn--fluid mt-5 js-calc">Рассчитать стоимость</a>
		</div>

		<div class="nd-px position-relative d-none d-lg-flex flex-column align-items-center gap-5 w-100 mt-auto">
			<?php get_template_part( 'template-parts/hero-slider/hero-slider', null, [ 'part' => 'nav' ] ); ?>
			<nav class="nd-hero__cats d-flex align-items-center gap-4 p-1 border border-white border-opacity-75 rounded-pill small fw-medium text-uppercase">
				<a href="<?php echo home_url( '/product-category/кухни/' ); ?>" class="d-flex align-items-center px-4 py-3 rounded-pill is-active">Кухни</a>
				<a href="<?php echo home_url( '/product-category/шкафы/' ); ?>" class="d-flex align-items-center px-4 py-3 rounded-pill">Шкафы</a>
				<a href="<?php echo home_url( '/product-category/гардеробные/' ); ?>" class="d-flex align-items-center px-4 py-3 rounded-pill">Гардеробные</a>
				<a href="<?php echo home_url( '/каталог/' ); ?>" class="nd-arrow d-flex align-items-center gap-3 px-4 py-3 rounded-pill">Весь каталог</a>
			</nav>
		</div>
	</div>
</section>
<!-- /Hero -->
