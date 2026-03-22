<?php
	
	/**
	 * Template Name: Контакты
	 * Template Post Type: page
	**/
	
	include 'header.php';
	
?>


<div class="site-wrap" style="height: 400px; z-index: auto;">
	<!-- Header -->
	<div class="site-navbar-wrap">
		<div class="jobs-home-section" style="min-height: 400px;"></div>
		<!-- <div class="overlay"></div> -->
		<div id="sp-home" class="scroll-points"></div>
        <header class="d-none d-lg-block">
            <!-- Header nav top -->
            <nav class="header-nav-top navbar navbar-expand-lg navbar-light d-none d-lg-block py-0">
                <div class="container">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ms-auto align-items-center">
                            <li class="nav-item me-1 me-xxl-3">
                                <a class="nav-link" href="#">
                                    <div style="display: flex;">
                                        <div class="nav-li-float-left">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/location-ico.svg">
                                        </div>
                                        <div class="nav-li-float-right" >
                                            гор. Рязань,<br>ул. Чапаева, 56
                                        </div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item me-1 me-xxl-3">
                                <a class="nav-link" href="#">
                                    <div style="display: flex;">
                                        <div class="nav-li-float-left">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg">
                                        </div>
                                        <div class="nav-li-float-right" >
                                            Пн-Сб: с 10.00-19.00<br>Вс: с 10.00-17.00
                                        </div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item me-1 me-xxl-3">
                                <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#callbackModal">
                                    <div style="display: flex;">
                                        <div class="nav-li-float-left">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-ico.svg">
                                        </div>
                                        <div class="nav-li-float-right max-width-1400 nav-wrap" >
                                            Обратный звонок
                                        </div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item me-1 me-xxl-4">
                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">
                                    <div style="display: flex;">      
                                        <div class="nav-li-float-left">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/calculator-ico.svg">
                                        </div>
                                        <div class="nav-li-float-right max-width-1400 nav-wrap" >
                                            Рассчитать стоимость
                                        </div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item me-1 me-xxl-4">
                                <a class="top-menu-tel nav-link" href="tel:+74912777098">
                                    <div style="display: flex;">
                                        <div class="nav-li-float-left">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/mobile-phone-ico.svg">
                                        </div>
                                        <div class="nav-li-float-right" style="min-width: 128px;">
                                            8 (4912) 77-70-98
                                        </div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item me-1 me-xxl-4 d-none d-xl-block">
                                <a class="top-menu-tel nav-link" href="tel:89511014610">
                                    <div style="display: flex;">
                                        <div class="nav-li-float-left">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/mobile-phone-ico.svg">
                                        </div>
                                        <div class="nav-li-float-right" style="min-width: 128px;">
                                            8 (951) 101-46-10
                                        </div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ico-button" href="https://t.me/+79511014610" target="_blank">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ico-button" href="https://wa.me/79511014610?web=1&app_absent=1" target="_blank">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ico-button" href="https://max.ru/u/f9LHodD0cOJ43FcHRXMZDl7Pj6Znjki8fXkN8cmXFNxOU9f0FntW8dTdUis" target="_blank">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/max.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /Header nav top -->
            
            <!-- Header nav bottom -->
            <nav class="header-nav-bottom navbar navbar-expand-lg navbar-light py-0">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo-light.svg" class="custom-logo" alt="Логотип в шапке" decoding="async" />
                    </a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobail-header-collapse" aria-controls="mobail-header-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="mobail-header-collapse">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'mobail-header-collapse',
                                'container' => false,
                                'menu_class' => '',
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '
                                    <ul id="%1$s" class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0 %2$s">%3$s
                                        <!-- Mobile menu -->
                                        <li class="nav-item d-lg-none">
                                            <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#callbackModal">Вызов замерщика</a>
                                        </li>
                                        <li class="nav-item d-lg-none">
                                            <div style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
                                                <img src="'.get_stylesheet_directory_uri().'/img/ico/location-ico.svg" style="width: 10px;" class="me-1">
                                                    <span>гор. Рязань, ул. Чапаева, 56</span>
                                            </div>
                                            <a class="nav-link top-menu-tel pt-1 pb-1" href="tel:89511014610">8 (951) 101-46-10</a>
                                            <div class="mb-2" style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
                                                <img src="'.get_stylesheet_directory_uri().'/img/ico/clock-ico.svg" style="width: 10px; position: relative; top: 2px;" class="me-1 mb-2">Пн-Сб: с 10.00-19.00, Вс: с 10.00-17.00
                                            </div>
                                        </li>
                                        <li class="nav-item d-lg-none pb-4">
                                            <a class="ico-button pe-2" href="https://wa.me/79511014610?web=1&app_absent=1" target="_blank">
                                                <img src="'.get_stylesheet_directory_uri().'/img/ico/whatsapp-ico.svg">
                                            </a>
                                            <a class="ico-button pe-2" href="https://t.me/+79511014610" target="_blank">
                                                <img src="'.get_stylesheet_directory_uri().'/img/ico/telegram-ico.svg">
                                            </a>
                                            <a class="ico-button pe-0" href="https://max.ru/u/f9LHodD0cOJ43FcHRXMZDl7Pj6Znjki8fXkN8cmXFNxOU9f0FntW8dTdUis" target="_blank">
                                                <img src="'.get_stylesheet_directory_uri().'/img/ico/max.svg">
                                            </a>
                                        </li>	
                                        <!-- End mobile menu -->
                                    </ul>
                                ',
                                'depth' => 2,
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                        ?>
                    </div>

                </div>
            </nav>
            <!-- /Header nav bottom -->
        </header>
		
		
		<header id="sliding-header" class="shadow">
			<!-- Header nav bottom -->
			<nav class="header-nav-bottom navbar navbar-expand-lg navbar-light py-1 py-lg-0">
				<div class="container">
					<a class="navbar-brand" href="/">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo-dark.svg" class="custom-logo" alt="Логотип в шапке" decoding="async" />
                </a>
					
					<div class="d-lg-none">
						<a class="top-menu-tel pt-1 pb-0" style="font-size: 14px;" href="tel:89511014610">8 (951) 101-46-10</a>
						<div style="font-size: 10px; font-family: Gilroy-Light; text-transform: none;">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg" style="width: 12px; position: relative; top: -1px;" class="me-1">Пн-Сб: с 10.00-19.00<br>Вс: с 10.00-17.00
						</div>
					</div>
					
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sliding-header-collapse" aria-controls="sliding-header-collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="collapse navbar-collapse" id="sliding-header-collapse">
						<?php
							wp_nav_menu(array(
								'theme_location' => 'sliding-header-collapse',
								'container' => false,
								'menu_class' => '',
								'fallback_cb' => '__return_false',
								'items_wrap' => '
									<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s">%3$s
										<!-- Mobile menu -->
										<li class="nav-item d-lg-none">
											<a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#callbackModal">Вызов замерщика</a>
										</li>
										<li class="nav-item d-lg-none">
											<div style="font-size: 12px; font-family: Gilroy-Light; text-transform: none;">
												<img src="'. get_stylesheet_directory_uri().'/img/ico/location-ico.svg" style="width: 10px; position: relative; top: -2px;" class="me-1">
												<span>гор. Рязань, ул. Чапаева, 56</span>
											</div>
											<a class="nav-link top-menu-tel pt-1 pb-1" href="tel:89511014610">8 (951) 101-46-10</a>
											<div class="mb-2" style="font-size: 12px; font-family: Gilroy-Light; text-transform: none;">
												<img src="'.get_stylesheet_directory_uri().'/img/ico/clock-ico.svg" style="width: 10px; position: relative; top: 3px;" class="me-1 mb-2">Пн-Сб: с 10.00-19.00, Вс: с 10.00-17.00
											</div>
										</li>
										<li class="nav-item d-lg-none pb-2">
											<a class="ico-button pe-2" href="https://wa.me/79511014610?web=1&app_absent=1" target="_blank">
												<img src="'.get_stylesheet_directory_uri().'/img/ico/whatsapp-ico.svg">
											</a>
											<a class="ico-button pe-2" href="https://t.me/+79511014610" target="_blank">
                                                <img src="'.get_stylesheet_directory_uri().'/img/ico/telegram-ico.svg">
                                            </a>
                                            <a class="ico-button pe-0" href="https://max.ru/u/f9LHodD0cOJ43FcHRXMZDl7Pj6Znjki8fXkN8cmXFNxOU9f0FntW8dTdUis" target="_blank">
                                                <img src="'.get_stylesheet_directory_uri().'/img/ico/max.svg">
                                            </a>
										</li>	
										<!-- End mobile menu -->
									</ul>
								',
								'depth' => 2,
								'walker' => new bootstrap_5_wp_nav_menu_walker()
							));
						?>
					</div>

				</div>
			</nav>
			<!-- /Header nav bottom -->
		</header><!-- site-navbar -->
		<div class="container">
			<div class="row align-items-center home-section-height min-home-section-height">
				<div class="col-xl-10 col-xxl-9">
					<h1 class="home-title text-light">Контакты</h1>
				</div>	
			</div>
		</div>
	</div>
</div>


<section class="archive-products-section site-section bg-white" style="padding-bottom: 60px; padding-top: 0; position: relative;">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="breadcrumbs pt-4">
					<nav class="woocommerce-breadcrumb" itemprop="breadcrumb"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/breadcrumbs-icon.svg"></a> / Контакты</nav>
				</div>
			</div>
		</div>
		<div class="container" style="padding: 0;">
			<div class="row">
				<div class="col text-dark ">
					<h2 class="text-md-center mb-3">Контакты</h2>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5 mx-md-auto d-block">
					<div class="container" style="margin-top: 60px;">
						<div class="row contact-p contact-box-info" style="font-family: 'Gilroy-Regular';">
							<div class="col-md-3 contact-info" style="flex: 0 0 35%;">
								<div style="display: flex; padding-bottom: 15px;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/location-ico.svg">
									</div>
									<div class="nav-li-float-right">
										<span style="text-wrap: wrap;">гор. Рязань, ул. Чапаева, д. 56, Мебельный центр "Базар" (ост. "Центральный рынок").</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg">
									</div>
									<div class="nav-li-float-right">
										<span>Пн-Сб 10:00-19:00, Вс 10:00-17:00</span>
									</div>
									<div style="clear: both;"></div>
								</div>
							</div>
							<div class="col-md-3 contact-info">
								<a href="https://t.me/+79511014610" style="display: flex; padding-bottom: 15px;" class="align-items-center text-dark text-decoration-none">
									<div class="nav-li-float-left">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/mobile-phone-ico.svg">
									</div>
									<div class="nav-li-float-right">
										<span>8 (951) 101-46-10</span>
									</div>
									<div style="clear: both;"></div>
								</a>
								
								<button data-bs-toggle="modal" data-bs-target="#callbackModal" style="display: flex;" class="btn p-0 align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-ico.svg">
									</div>
									<div class="nav-li-float-right">
										<span>Обратный звонок</span>
									</div>
									<div style="clear: both;"></div>
								</button>
							</div>
							<div class="col-md-3 contact-info">
								<a  href="tel:+74912527890" style="display: flex; padding-bottom: 15px;" class="align-items-center text-dark">
									<div class="nav-li-float-left">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telephone-ico-blue.svg">
									</div>
									<div class="nav-li-float-right">
										<span>8 (4912) 52-78-90</span>
									</div>
									<div style="clear: both;"></div>
								</a>
								<a  href="tel:+74912777098"  style="display: flex;" class="align-items-center text-dark">
									<div class="nav-li-float-left">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telephone-ico-blue.svg">
									</div>
									<div class="nav-li-float-right">
										<span>8 (4912) 77-70-98</span>
									</div>
									<div style="clear: both;"></div>
								</a>
							</div>
							<div class="col-md-3 contact-info">
								<a href="mailto:mebel-dsever@yandex.ru" class="text-dark text-decoration-none" style="display: flex; padding-bottom: 15px;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/email-ico.svg">
									</div>
									<div class="nav-li-float-right">
										<span>mozaika62@bk.ru</span>
									</div>
									<div style="clear: both;"></div>
								</a>
							</div>
						</div>
					</div>
					<div class="d-flex justify-content-md-center" style="margin-top: 60px;">
						<!--
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.svg" alt="whatsapp" style="padding: 10px;">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg" alt="telegram" style="padding: 10px;">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/instagram-ico.svg" alt="instagram" style="padding: 10px;">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/vk-ico.svg" alt="vk" style="padding: 10px;">
						-->
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link ico-button px-2" href="https://wa.me/79511014610?web=1&amp;app_absent=1" target="_blank">
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
		</div>
	</div>
</section>

<!-- Yandex Map -->
<section class="archive-products-section site-section bg-white" style="padding-bottom: 60px; z-index: 10; position: relative;">
	<div class="container">
		<div class="row">
			<section id="map" style="height: 650px; border-radius: 10px;"></section>
		</div>
	</div>
</section>

<!-- API Yandex map -->
<script src="https://api-maps.yandex.ru/2.1/?apikey=67fa0c4f-ad3f-4f9e-bd3f-729ca47910bf&lang=ru_RU" type="text/javascript"></script>

<script type="text/javascript">
	// Функция ymaps.ready() будет вызвана, когда
	// загрузятся все компоненты API, а также когда будет готово DOM-дерево.
	ymaps.ready(init);
	function init(){
		// Создание карты.
		var myMap = new ymaps.Map("map", {
			// Координаты центра карты.
			// Порядок по умолчанию: «широта, долгота».
			// Чтобы не определять координаты центра карты вручную,
			// воспользуйтесь инструментом Определение координат.
			center: [54.624353, 39.734443],
			// Уровень масштабирования. Допустимые значения:
			// от 0 (весь мир) до 19.
			zoom: 17
		});
		
		var glyphIcon1 = new ymaps.Placemark([54.624363, 39.734543], {}, {
			iconLayout: 'default#image',
			iconImageHref: '<?php echo get_stylesheet_directory_uri(); ?>/img/ico/placemark0.png',
			iconImageSize: [270, 270],
			iconImageOffset: [-150, -230]
		});
		
		// Размещение геообъекта на карте.
		myMap.geoObjects.add(glyphIcon1);
	}
</script>

	
	
<?php include 'footer-1.php'; ?>