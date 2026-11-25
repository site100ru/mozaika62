<?php // Footer for vyezjalo() function ?>

<?php
    // Не показываем на странице с шаблоном "Кучина"
    $is_cucina_page = is_page_template( 'cucina.php' );

    if ( $is_cucina_page ) : ?>
        <script>
            localStorage.setItem('cucinaPopupLastClosed', Date.now().toString());
        </script>
    <?php else : ?>

    <div class="popup-overlay" id="cucinaPopup">
        <div class="popup">
            <div class="popup-bg"></div>

            <button class="popup-close" id="cucinaPopupClose">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/close-popup.svg" alt="Закрыть">
            </button>

            <div class="popup-content">

                <div class="popup-logo">
                    <a href="https://мозаика62.рф/кухни-cucina-в-рязани/">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cucina.png" alt="Cucina" style="max-width: 220px;">
                    </a>
                </div>

                <div class="popup-description">
                    Мы являемся официальным представителем кухонь <strong>Cucina</strong> в Рязани
                </div>

                <div class="popup-buttons">
                    <a href="https://мозаика62.рф/кухни-cucina-в-рязани/" class="popup-btn-main btn-corporate-color-1 btn btn-lg">Подробнее</a>
                    <button class="popup-btn-dismiss" id="cucinaPopupDismiss">Не интересует</button>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const popup      = document.getElementById('cucinaPopup');
            const btnClose   = document.getElementById('cucinaPopupClose');
            const btnDismiss = document.getElementById('cucinaPopupDismiss');
            const HIDE_DURATION = 12 * 60 * 60 * 1000;  // 12 часов в мс

            function shouldShow() {
                const lastClosed = localStorage.getItem('cucinaPopupLastClosed');
                if ( ! lastClosed ) return true;
                return ( Date.now() - parseInt(lastClosed) ) > HIDE_DURATION;
            }

            function closePopup() {
                popup.classList.remove('active');
                localStorage.setItem('cucinaPopupLastClosed', Date.now().toString());
            }

            // Показываем через 15 сек если нужно
            if ( shouldShow() ) {
                const isFirstVisit = ! localStorage.getItem('cucinaPopupSeen');
                const delay = isFirstVisit ? 15 * 1000 : 0;

                // Фиксируем что уже был первый показ
                localStorage.setItem('cucinaPopupSeen', '1');

                setTimeout(function () {
                    popup.classList.add('active');
                }, delay);
            }

            // Закрытие крестиком
            btnClose.addEventListener('click', closePopup);

            // Закрытие «Не интересует»
            btnDismiss.addEventListener('click', closePopup);
        });
    </script>
<?php endif; ?>

<?php if ( ! is_page_template( 'template-home.php' ) ) : ?>
<!-- CONTACTS SECTION 4 -->
<section class="contacts-section-4">

	<!-- Desktop version -->
	<div class="container py-5 d-none d-xl-block">
		<div class="row align-items-center">
			<div class="col-xl-2">
				<a href="/">
					<img id="navbar-brand-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo-light.svg"
						class="img-fluid">
				</a>
			</div>
			<div class="col-xl-8">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'contacts-desktop-menu',
					'container' => false,
					'menu_class' => '',
					'fallback_cb' => '__return_false',
					'items_wrap' => '
							<ul id="%1$s" class="nav justify-content-center %2$s">%3$s</ul>
						',
					'depth' => 2,
					'walker' => new bootstrap_5_wp_nav_menu_walker()
				));
				?>
			</div>
			<div class="col-xl-2 text-end">
				<a href="tel:‪89511014610" class="contacts-phone">‪
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" class="me-2"
						style="position: relative; bottom: 1px;">8 <span>(951)</span> 101-46-10
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col py-4">
				<ul class="nav justify-content-center align-items-center">
					<li class="nav-item me-1 me-lg-2">
						<a class="nav-link" href="#">
							<div style="display: flex;" class="align-items-center">
								<div class="nav-li-float-left">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/location-ico.svg">
								</div>
								<div class="nav-li-float-right">
									<span>гор. Рязань,<br>ул. Чапаева, 56</span>
								</div>
								<div style="clear: both;"></div>
							</div>
						</a>
					</li>
					<li class="nav-item me-1 me-lg-2">
						<a class="nav-link" href="#">
							<div style="display: flex;" class="align-items-center">
								<div class="nav-li-float-left">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg" class="pt-1">
								</div>
								<div class="nav-li-float-right">
									<span>Пн-Сб: с 10:00-19:00<br>Вс: с 10:00-17:00</span>
								</div>
								<div style="clear: both;"></div>
							</div>
						</a>
					</li>
					<li class="nav-item me-1 me-lg-2">
						<a href="mailto:mozaika62@bk.ru" class="nav-link">
							<div style="display: flex;" class="align-items-center">
								<div class="nav-li-float-left">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/email-ico.svg">
								</div>
								<div class="nav-li-float-right">
									<span>mozaika62@bk.ru</span>
								</div>
								<div style="clear: both;"></div>
							</div>
						</a>
					</li>
					<li class="nav-item me-1 me-lg-2">
						<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#callbackModal">
							<div style="display: flex;" class="align-items-center">
								<div class="nav-li-float-left">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-ico.svg">
								</div>
								<div class="nav-li-float-right">
									<span>Обратный звонок</span>
								</div>
								<div style="clear: both;"></div>
							</div>
						</a>
					</li>
					<li class="nav-item me-1 me-lg-2">
						<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">
							<div style="display: flex;" class="align-items-center">
								<div class="nav-li-float-left">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/calculator-ico.svg" class="pt-1">
								</div>
								<div class="nav-li-float-right">
									<span>Рассчитать стоимость</span>
								</div>
								<div style="clear: both;"></div>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col">
				<ul class="nav justify-content-center">
					<li class="nav-item">
						<a class="nav-link ico-button px-2" href="https://wa.me/79511014610?web=1&app_absent=1" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ico-button px-2" href="https://t.me/+79511014610" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg">
						</a>
					</li>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="https://max.ru/u/f9LHodD0cOJ43FcHRXMZDl7Pj6Znjki8fXkN8cmXFNxOU9f0FntW8dTdUis" target="_blank">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/max.svg">
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ico-button px-2" href="https://www.instagram.com/mozaika.kitchen62" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/instagram-ico.svg">
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ico-button px-2" href="https://vk.com/mozaika.kitchen62" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/vk-ico.svg">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /Desktop version -->

	<!-- Mobile version -->
	<div class="container d-xl-none">
		<div class="row">
			<div class="col py-5">
				<a href="#">
					<img id="navbar-brand-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo-light.svg"
						class="img-fluid">
				</a>
				<ul class="ps-0 pt-3 pb-2">
					<li class="nav-item">
						<a href="#" class="nav-link ps-0 pb-2">
							<div style="display: flex;" class="align-items-center">
								<div class="nav-li-float-left">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/location-ico.svg">
								</div>
								<div class="nav-li-float-right">
									<span>гор. Рязань, ул. Чапаева, д. 56</span>
								</div>
								<div style="clear: both;"></div>
							</div>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link ps-0 py-2">
							<div style="display: flex;" class="align-items-center">
								<div class="nav-li-float-left">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg" class="pt-1">
								</div>
								<div class="nav-li-float-right">
									<span>Пн-Сб: с 10:00-19:00 Вс: с 10:00-17:00</span>
								</div>
								<div style="clear: both;"></div>
							</div>
						</a>
					</li>
					<li class="nav-item">
						<a href="mailto:mozaika62@bk.ru" class="nav-link ps-0 py-2">
							<div style="display: flex;" class="align-items-center">
								<div class="nav-li-float-left">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/email-ico.svg">
								</div>
								<div class="nav-li-float-right">
									<span>mozaika62@bk.ru</span>
								</div>
								<div style="clear: both;"></div>
							</div>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link ps-0 pt-2" data-bs-toggle="modal" data-bs-target="#callbackModal">
							<div style="display: flex;" class="align-items-center">
								<div class="nav-li-float-left">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-ico.svg">
								</div>
								<div class="nav-li-float-right">
									<span>Обратный звонок</span>
								</div>
								<div style="clear: both;"></div>
							</div>
						</a>
					</li>
				</ul>
				<a href="tel:‪84912777098" class="contacts-phone">
					<div style="display: flex;" class="align-items-center">
						<div class="nav-li-float-left">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/mobile-phone-ico.svg"
								style="position: relative; bottom: 1px;">
						</div>
						<div class="nav-li-float-right">
							8 <span>(4912)</span> 777-098
						</div>
						<div style="clear: both;"></div>
					</div>
				</a>
				<div style="height: 15px;"></div>
				<a href="tel:‪89511014610" class="contacts-phone">
					<div style="display: flex;" class="align-items-center">
						<div class="nav-li-float-left">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/mobile-phone-ico.svg"
								style="position: relative; bottom: 1px;">
						</div>
						<div class="nav-li-float-right">
							8 <span>(951)</span> 101-46-10
						</div>
						<div style="clear: both;"></div>
					</div>
				</a>
				<ul class="nav pt-4 pb-3">
					<li class="nav-item">
						<a class="nav-link ico-button ps-0 pe-2" href="https://wa.me/79511014610?web=1&app_absent=1">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ico-button px-2" href="https://t.me/+79511014610" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg">
						</a>
					</li>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="https://max.ru/u/f9LHodD0cOJ43FcHRXMZDl7Pj6Znjki8fXkN8cmXFNxOU9f0FntW8dTdUis" target="_blank">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/max.svg">
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ico-button px-2" href="https://www.instagram.com/mozaika.kitchen62" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/instagram-ico.svg">
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ico-button px-2" href="https://vk.com/mozaika.kitchen62" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/vk-ico.svg">
						</a>
					</li>
				</ul>
				<div class="row">
					<div class="col-lg-8 pt-4 pt-lg-2">
						<div class="row d-xl-none justify-content-center">
							<div class="col-6 left-col-footer-menu">
								<?php
								wp_nav_menu(array(
									'theme_location' => 'footer-left',
									'container' => false,
									'menu_class' => '',
									'fallback_cb' => '__return_false',
									'items_wrap' => '<ul id="menu-main-menu-5" class="navbar-nav ms-auto mb-lg-0 %2$s">%3$s</ul>',
									'depth' => 2,
									'walker' => new bootstrap_5_wp_nav_menu_walker()
								));
								?>
							</div>
							<div class="col-6 right-col-footer-menu">
								<?php
								wp_nav_menu(array(
									'theme_location' => 'footer-right',
									'container' => false,
									'menu_class' => '',
									'fallback_cb' => '__return_false',
									'items_wrap' => '<ul id="menu-main-menu-6" class="navbar-nav ms-auto mb-lg-0 %2$s">%3$s</ul>',
									'depth' => 2,
									'walker' => new bootstrap_5_wp_nav_menu_walker()
								));
								?>
							</div>
						</div>
					</div>
				</div>
				<!--div class="row">
					<div class="col-6">
						<ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link ps-0 active" href="#">Главная</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link ps-0 dropdown-toggle" aria-current="page" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Услуги</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="/кухни-на-заказ">Кухни на заказ</a></li>
									<li><a class="dropdown-item" href="/шкафы-на-заказ">Шкафы на заказ</a></li>
									<li><a class="dropdown-item" href="archive-product-portfolio2.html">Прихожие на заказ</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link ps-0" href="archive-action-page.html">Акции</a>
							</li>
						</ul>
					</div>
					<div class="col-6">
						<ul class="nav flex-column">
							<li class="nav-item dropdown">
								<a class="nav-link ps-0 dropdown-toggle" aria-current="page" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Каталог</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="/кухни-на-заказ">Кухни</a></li>
									<li><a class="dropdown-item" href="#">Шкафы</a></li>
									<li><a class="dropdown-item" href="#">Прихожие</a></li>
									<li><a class="dropdown-item" href="#">Обеденные группы</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link ps-0" href="our-works.html">Наши работы</a>
							</li>
							<li class="nav-item">
								<a class="nav-link ps-0" href="contacts.html">Контакты</a>
							</li>
						</ul>
					</div>
				</div-->

			</div>
		</div>
	</div>
	<!-- /Mobile version -->

	<!-- Footer -->
	<footer style="padding: 29px 0;">
		<div class="container">
			<div class="row">
				<div class="col text-start text-md-center">
					<div id="im-in-footer">Создание, продвижение и поддержка:
						<a href="https://site100.ru" class="text-light">site100.ru</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /Footer -->

</section>
<!-- /CONTACTS SECTION 4 -->
<?php else : ?>
<!-- New footer -->
<div class="nd">
	<footer class="pt-4 pt-lg-5 pb-3 border-top-0 text-center text-lg-start text-body-secondary">
		<div class="container-xxl">
			<div class="row gy-4">
				<!-- О компании -->
				<div class="col-lg-3 d-flex flex-column align-items-center align-items-lg-start gap-3">
					<a href="<?php echo home_url('/'); ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/logo-green.png" width="229" height="70" alt="Кухни Мозаика">
					</a>
					<p class="nd-text-xs">Салон кухонь и корпусной мебели на заказ в Рязани. Индивидуальный подход, собственное производство, гарантия 2 года</p>
					<div class="d-flex gap-3">
						<a href="https://wa.me/79511014610?web=1&app_absent=1" target="_blank" class="nd-fade">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/wa.png" width="30" height="30" alt="WhatsApp">
						</a>
						<a href="https://max.ru/u/f9LHodD0cOJ43FcHRXMZDl7Pj6Znjki8fXkN8cmXFNxOU9f0FntW8dTdUis" target="_blank" class="nd-fade">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/max.png" width="30" height="30" alt="Max">
						</a>
						<a href="https://t.me/+79511014610" target="_blank" class="nd-fade">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/tg.png" width="30" height="30" alt="Telegram">
						</a>
						<a href="#" target="_blank" class="nd-fade">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/insta.png" width="30" height="30" alt="Instagram">
						</a>
						<a href="#" target="_blank" class="nd-fade">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/vk.png" width="30" height="30" alt="ВКонтакте">
						</a>
					</div>
				</div>

				<div class="col-lg-9 ps-lg-5 d-flex flex-column flex-lg-row justify-content-between gap-3">
					<!-- Меню подвала: пункт верхнего уровня — заголовок колонки, вложенные — ссылки -->
					<?php
					$nd_footer_locations = get_nav_menu_locations();
					$nd_footer_items     = wp_get_nav_menu_items( $nd_footer_locations['nd-footer'] ?? 0 ) ?: [];
					?>
					<?php foreach ( $nd_footer_items as $nd_column ) : ?>
						<?php if ( $nd_column->menu_item_parent ) continue; ?>
						<div class="d-flex flex-column align-items-center align-items-lg-start gap-2">
							<button type="button" class="nd-footer__title collapsed d-flex align-items-center gap-2 nd-text fw-medium text-uppercase text-body" data-bs-toggle="collapse" data-bs-target="#nd-footer-<?php echo $nd_column->ID; ?>" aria-expanded="false"><?php echo esc_html( $nd_column->title ); ?></button>
							<div class="collapse d-lg-block" id="nd-footer-<?php echo $nd_column->ID; ?>">
								<div class="d-flex flex-column align-items-center align-items-lg-start gap-2 small">
									<?php foreach ( $nd_footer_items as $nd_link ) : ?>
										<?php if ( (int) $nd_link->menu_item_parent !== $nd_column->ID ) continue; ?>
										<a href="<?php echo esc_url( $nd_link->url ); ?>"<?php echo $nd_link->target ? ' target="' . esc_attr( $nd_link->target ) . '"' : ''; ?>><?php echo esc_html( $nd_link->title ); ?></a>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>

					<!-- Контакты -->
					<div class="d-flex flex-column align-items-center align-items-lg-start gap-2">
						<div class="nd-text fw-medium text-uppercase text-body">Контакты</div>
						<div class="d-flex flex-column gap-2 small">
							<a href="tel:89511014610" class="d-flex gap-2 fs-6 fw-semibold">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-phone.svg" width="20" height="22" alt="">8 (951) 101-46-10
							</a>
							<a href="mailto:mozaika62@bk.ru" class="d-flex gap-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-mail.svg" width="20" height="22" alt="">mozaika62@bk.ru
							</a>
							<span class="d-flex gap-2 text-start">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-calendar.svg" width="20" height="22" alt="">Пн-Сб: с 10:00-19:00<br>Вс: с 10:00-17:00
							</span>
							<span class="d-flex gap-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-pin.svg" width="20" height="22" alt="">г. Рязань, ул. Чапаева, 56
							</span>
							<a href="https://yandex.ru/maps/?text=Рязань, ул. Чапаева, 56" target="_blank" class="align-self-center align-self-lg-end text-success text-decoration-underline">показать на карте</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Копирайт -->
			<div class="d-flex flex-column gap-3 mt-4 pt-3 border-top small">
				<div class="nd-footer__legal d-flex flex-column flex-lg-row align-items-center justify-content-between gap-3">
					<span>© 2024–2026 Салон мебели «Мозаика». Все права защищены</span>
					<a href="<?php echo home_url('/политика-конфиденциальности/'); ?>">Политика конфиденциальности</a>
					<a href="<?php echo home_url('/пользовательское-соглашение/'); ?>">Пользовательское соглашение</a>
					<a href="<?php echo home_url('/публичная-оферта/'); ?>">Публичная оферта</a>
				</div>
				<div class="d-flex flex-column flex-lg-row align-items-center justify-content-between gap-3">
					<span>ИП Новичков Владимир Антонович <br class="d-lg-none">ИНН 62300993201 ОГРН 324620000044796</span>
					<span>Создание, продвижение и поддержка: <a href="https://site100.ru" target="_blank" class="text-decoration-underline">site100.ru</a></span>
				</div>
			</div>
		</div>
	</footer>
</div>
<!-- /New footer -->
<?php endif; ?>



<!-- Показываем сообщение об успешной отправки -->
<div style="display: <?php echo $_SESSION['display'] ?>;" onclick="modalClose();">
	<div id="background-msg" style="display: <?php echo $_SESSION['display'] ?>;"></div>
	<button id="btn-close" type="button" class="btn-close btn-close-white" onclick="modalClose();"
		style="position: absolute; z-index: 9999; top: 15px; right: 15px;"></button>
	<div id="message">
		<?php echo $_SESSION['recaptcha'];
		unset($_SESSION['recaptcha']); ?>
	</div>
</div>


<!-- callbackModalConsul Modal -->
<div class="modal fade" id="callbackModalConsul" tabindex="-1" aria-labelledby="callbackModalConsulLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/callback-consul.php"
			class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="callbackModalConsulLabel">Записаться на консультацию</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6 mb-3 mb-md-0">
						<input type="text" name="name" class="form-control" placeholder="Ваше имя">
					</div>
					<div class="col-md-6">
						<input type="text" name="tel" class="form-control telMask" placeholder="Ваш телефон*" required>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="g-recaptcha-response-callback-consul" name="g-recaptcha-response">
				<button type="submit" class="btn btn-lg btn-corporate-color-1 mx-auto">Жду звонка</button>
			</div>
		</form>
	</div>
</div>
<!-- /callbackModalConsul Modal -->


<!-- Callback Modal -->
<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/callback-mail.php"
			class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="callbackModalLabel">Обратный звонок</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<p><small>Мы свяжемся с Вами в течение 10 минут и ответим на все вопросы! Для звонка введите Ваше имя и
								телефон.</small></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3 mb-md-0">
						<input type="text" name="name" class="form-control" placeholder="Ваше имя">
					</div>
					<div class="col-md-6">
						<input type="text" name="tel" class="form-control telMask" placeholder="Ваш телефон*" required>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="g-recaptcha-response-callback" name="g-recaptcha-response">
				<button type="submit" class="btn btn-lg btn-corporate-color-1 mx-auto">Жду звонка</button>
			</div>
		</form>
	</div>
</div>
<!-- /Callback Modal -->

<!-- Order Modal -->
<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/callback-mail.php"
			class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="orderModalLabel">Оставить заявку</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<p><small>Мы свяжемся с Вами в ближайшее время и ответим на все вопросы по заявке! Для звонка введите Ваше имя и телефон.</small></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3 mb-md-0">
						<input type="text" name="name" class="form-control" placeholder="Ваше имя">
					</div>
					<div class="col-md-6">
						<input type="text" name="phone" class="form-control telMask" placeholder="Ваш телефон*" inputmode="text" required>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<input type="hidden" id="g-recaptcha-response-order" name="g-recaptcha-response">
				<button type="submit" class="btn btn-corporate-color-1 mx-auto">Жду звонка</button>
			</div>
		</form>
	</div>
</div>
<!-- /Order Modal -->

<!-- Рассчитать стоимость с загрузкой изображения -->
<div class="modal fade" id="calculatePriceWithDownloadModal" tabindex="-1"
	aria-labelledby="calculatePriceWithDownloadLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/get_calculate_2.php"
			class="modal-content" enctype="multipart/form-data">
			<div class="modal-header">
				<h5 class="modal-title" id="calculatePriceWithDownloadLabel">Рассчитать стоимость</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row pb-2">
					<div class="col-12">
						<p><small>Опишите кухню своими словами, укажите форму, размеры, материалы и другую информацию</small></p>
					</div>
					<div class="col-12 mb-3">
						<textarea type="text" rows="3" name="mes" class="form-control form-control-corporate-color-1"
							placeholder=""></textarea>
					</div>
					<div class="col-12">
						<p><small>Вы можете прикрепить проект, изображение или схематично нарисованный рисунок кухни.</small></p>
					</div>
					<div class="mb-3">
						<div class="input-group custom-file-button">
							<label class="btn btn-lg btn-corporate-color-1 input-group-text" style="border-radius: 8px;" for="inputGroupFile">Прикрепить</label>
							<input type="file" name="file[]" class="form-control" id="inputGroupFile"
								accept=".jpg,.jpeg,.png,.pdf,.heic" multiple>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<input type="text" name="name" class="form-control form-control-corporate-color-1" placeholder="Ваше имя">
					</div>
					<div class="col-md-6 mb-3">
						<input type="text" name="tel" class="form-control form-control-corporate-color-1 telMask"
							placeholder="Ваш телефон*" required>
					</div>
					<div class="col-md-6">
						<input type="hidden" id="g-recaptcha-response-calculatePriceWithDownload" name="g-recaptcha-response">
						<button type="submit" class="btn btn-lg btn-corporate-color-1">Отправить</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- /Рассчитать стоимость с загрузкой изображения -->


<!-- Рассчитать стоимость без загрузки изображения -->
<div class="modal fade" id="calculatePriceWithoutDownloadModal" tabindex="-1"
	aria-labelledby="calculatePriceWithoutDownloadLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/get_calculate.php"
			class="modal-content" enctype="multipart/form-data">
			<div class="modal-header">
				<h5 class="modal-title" id="calculatePriceWithoutDownloadLabel">Рассчитать стоимость</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row pb-2">
					<div class="col-12">
						<p><input type="text" name="product" style="border: none; outline: none;"
								value="<?php echo get_the_title(); ?>"></p>
					</div>
					<div class="col-12 mb-3">
						<textarea type="text" rows="3" name="mes" class="form-control form-control-corporate-color-1"
							placeholder="При желании укажите форму, размеры, материалы кухни или другую информацию"></textarea>
					</div>
					<div class="col-md-6 mb-3">
						<input type="text" name="name" class="form-control form-control-corporate-color-1" placeholder="Ваше имя">
					</div>
					<div class="col-md-6 mb-3">
						<input type="text" name="tel" class="form-control form-control-corporate-color-1 telMask"
							placeholder="Ваш телефон*" required>
					</div>
					<div class="col-md-6">
						<input type="hidden" id="g-recaptcha-response-calculatePriceWithoutDownload" name="g-recaptcha-response">
						<button type="submit" class="btn btn-corporate-color-1">Отправить</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- /Рассчитать стоимость без загрузки изображения -->



<!-- Callback button HTML -->
<div class="callback-button-wrapper">
	<div id="callbackBtn" class="callback-button" onclick="callbackButtonClick();">
		<div id="btnIco" class="callback-button-ico"></div>
	</div>

	<div id="formBtn" class="callback-form-button" data-bs-toggle="tooltip" data-bs-placement="left"
		data-bs-custom-class="custom-tooltip" data-bs-title="Перезвонить Вам?">
		<a data-bs-toggle="modal" data-bs-target="#callbackModal">
			<div class="callback-form-button-ico"></div>
		</a>
	</div>
	<div id="phoneBtn" class="callback-phone-button" data-bs-toggle="tooltip" data-bs-placement="left"
		data-bs-custom-class="custom-tooltip" data-bs-title="Позвонить">
		<a href="tel:89511014610">
			<div class="callback-phone-button-ico"></div>
		</a>
	</div>
	<div id="whatsappBtn" class="callback-whatsapp-button" data-bs-toggle="tooltip" data-bs-placement="left"
		data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp">
		<!-- Не открывает ссылку с ПК если не установлено приложение WhatsApp
		<a href="whatsapp://send?phone=+79361385058"><div class="callback-whatsapp-button-ico"></div></a> -->
		<!-- Другой вариант ссылки. Все равно не открывает Whatsapp если нет приложения -->
		<a href="https://wa.me/79511014610?web=1&app_absent=1" target="blank">
			<div class="callback-whatsapp-button-ico"></div>
		</a>
		<!-- Еще варианты -->
		<!--a href="https://api.whatsapp.com/send/?phone=79361385058&text=Привет"><div class="callback-whatsapp-button-ico"></div></a-->
		<!--a href="https://wa.clck.bar/79361385058?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!"><div class="callback-whatsapp-button-ico"></div></a-->
	</div>
	<div id="telegramBtn" class="callback-telegram-button" data-bs-toggle="tooltip" data-bs-placement="left"
		data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
		<a href="https://t.me/+79511014610" target="_blank">
			<div class="callback-telegram-button-ico"></div>
		</a>
	</div>

    <div id="maxBtn" class="callback-max-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Max">
        <a href="https://max.ru/u/f9LHodD0cOJ43FcHRXMZDl7Pj6Znjki8fXkN8cmXFNxOU9f0FntW8dTdUis" target="_blank">
            <div class="callback-max-button-ico"></div>
        </a>
    </div>
</div>
<!-- /Callback button HTML -->

<!-- Callback button JS -->
<script>
    function callbackButtonClick() {
        
        let formBtn = document.getElementById('formBtn').style.top;
        
        if ( formBtn == "0px" || formBtn == 0 ) {
            document.getElementById('callbackBtn').style.animation = "none";
            document.getElementById('btnIco').style.animation = "change2 linear .5s";
            document.getElementById('btnIco').style.webkitAnimation = "change2 linear .5s";
            document.getElementById('btnIco').style.webkitTransition ="transform 1s ease-in-out";
            
            document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
            document.getElementById('btnIco').style.transform = "rotate(180deg)";
            
            
            document.getElementById('btnIco').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-button-close.png)";
            document.getElementById('btnIco').style.backgroundPosition = "center";
            document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";
            
            document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
            document.getElementById('btnIco').style.backgroundSize = "cover";
            
            
            document.getElementById('formBtn').style.top = "-60px";
            document.getElementById('formBtn').style.opacity = "1";
            
            document.getElementById('phoneBtn').style.top = "-120px";
            document.getElementById('phoneBtn').style.opacity = "1";
            
            document.getElementById('whatsappBtn').style.top = "-180px";
            document.getElementById('whatsappBtn').style.opacity = "1";
            
            document.getElementById('telegramBtn').style.top = "-240px";
            document.getElementById('telegramBtn').style.opacity = "1";

            document.getElementById('maxBtn').style.top = "-300px";
            document.getElementById('maxBtn').style.opacity = "1";
        } else {
            document.getElementById('callbackBtn').style.animation = "waves linear 2s infinite";
            document.getElementById('btnIco').style.animation = "change linear 16s infinite";
            document.getElementById('btnIco').style.webkitTransition ="transform 1s ease-in-out";
            document.getElementById('btnIco').style.webkitAnimation = "change linear 16s infinite";
            document.getElementById('btnIco').style.transform = "rotate(180deg)";
            document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
            document.getElementById('btnIco').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-button-ico.png)";
            document.getElementById('btnIco').style.backgroundPosition = "center";
            document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";
            
            document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
            document.getElementById('btnIco').style.backgroundSize = "cover";
            
            
            document.getElementById('formBtn').style.top = "0px";
            document.getElementById('formBtn').style.opacity = "0";
            
            document.getElementById('phoneBtn').style.top = "0px";
            document.getElementById('phoneBtn').style.opacity = "0";
            
            document.getElementById('whatsappBtn').style.top = "0px";
            document.getElementById('whatsappBtn').style.opacity = "0";
            
            document.getElementById('telegramBtn').style.top = "0px";
            document.getElementById('telegramBtn').style.opacity = "0";
            
            document.getElementById('maxBtn').style.top = "0px";
            document.getElementById('maxBtn').style.opacity = "0";
        }
    }
</script>
<!-- /Callback button JS -->


<!-- Dounloads Bootstrap Bundle with Popper -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>

<!-- Scripts for Quiz and for add loader -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
<!--script src="https://code.jquery.com/jquery-3.6.0.min.js"></script-->

<!-- Font Awesome -->
<!-- <script src="https://kit.fontawesome.com/064ae6a0a2.js"></script> -->


<!-- Theme JS -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/theme.js"></script>


<!-- Выбераем функцию для header -->
<?php if ( function_exists( 'is_product' ) && is_product() ) { ?>
	<script>prilipalo();</script>
<? } elseif ( ! is_page_template( 'template-home.php' ) ) { ?>
	<script>vyezjalo();</script>
<?php } ?>


<!-- Telephone number mask -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/inputmask.min.js"></script>
<script>
	var telMask = document.getElementsByClassName("telMask");
	var im = new Inputmask("+7(999)999-99-99");
	im.mask(telMask);
</script>


<!-- Загрузка изображений с приоритетом
<script>
	if ("loading" in HTMLImageElement.prototype) {
		const images = document.querySelectorAll('img[loading="lazy"]');
		images.forEach((img) => {
			img.src = img.dataset.src;
		});
	} else {
		// Dynamically import the LazySizes library
		const script = document.createElement("script");
		script.src = "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js";
		document.body.appendChild(script);
	}
</script> -->


<!-- reCaptcha v3 New from Google -->
<script src='https://www.google.com/recaptcha/api.js?render=6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn'></script>
<script>
	grecaptcha.ready(function () {
		grecaptcha.execute('6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn', { action: 'action_name' }).then(function (token) {

			if (document.getElementById('g-recaptcha-response-callback')) {
				document.getElementById('g-recaptcha-response-callback').value = token;
			}

            if (document.getElementById('g-recaptcha-response-callback-consul')) {
                document.getElementById('g-recaptcha-response-callback-consul').value = token;
            }

			if (document.getElementById('g-recaptcha-response-calculatePriceWithDownload')) {
				document.getElementById('g-recaptcha-response-calculatePriceWithDownload').value = token;
			}
			if (document.getElementById('g-recaptcha-response-calculatePriceWithoutDownload')) {
				document.getElementById('g-recaptcha-response-calculatePriceWithoutDownload').value = token;
			}
			// Order
			if ( document.getElementById('g-recaptcha-response-order') ) {
				document.getElementById('g-recaptcha-response-order').value=token;
			}

            if ( document.getElementById('g-recaptcha-response-order-2') ) {
                document.getElementById('g-recaptcha-response-order-2').value=token;
            }
		});
	});
</script>
<!-- <?php include get_template_directory() . '/inc/snowflake/snowflake.php'; ?> -->

</body>

</html>