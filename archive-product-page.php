<!DOCTYPE html>
<html lang="ru">
	<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
		
		<!-- Bootstrap CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Style CSS -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/theme-2.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/theme.css">
		
		<!-- Quiz CSS -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/quiz.css">
		
		<!-- Artem CSS -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
		
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/favicon.jpg" type="image/x-icon" />

		<!-- <script src="https://kit.fontawesome.com/064ae6a0a2.js"></script> -->
		
		<!-- Animate.css -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
		
		<title>Студия кухни «Мозаика» - Кухни на заказ по Вашим размерам в Рязани</title>
		
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
			(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();
			for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
			k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
			(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

			ym(55290793, "init", {
				clickmap:true,
				trackLinks:true,
				accurateTrackBounce:true,
				webvisor:true
			});
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/55290793" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
	</head>
    <body>
	
	
		<!-- Home section -->
		<div id="sp-home" class="scroll-points"></div>
		<section class="main-home-section">
			<div class="parallax-home-section" style="min-height: 640px;"></div>
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
							<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link" href="/" style="transition: .25s;">Главная</a>
								</li>
								<li class="nav-item d-none d-lg-inline">
									<span class="nav-link">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/menu-decoration-point.svg">
									</span>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link active dropdown-toggle" href="/кухни-на-заказ" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Каталог</a>
									<ul class="dropdown-menu dropdown-menu-light ms-0 py-1" style="border-radius: 5px;" aria-labelledby="navbarDarkDropdownMenuLink">
										<li><a class="dropdown-item nav-item active" href="/кухни-на-заказ">Кухни</a></li>
										<li><a class="dropdown-item nav-item" href="#">Шкафы</a></li>
										<li><a class="dropdown-item nav-item" href="#">Прихожие</a></li>
										<li><a class="dropdown-item nav-item" href="#">Обеденные группы</a></li>
									</ul>
								</li>
								<li class="nav-item d-none d-lg-inline">
									<span class="nav-link">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/menu-decoration-point.svg">
									</span>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="/кухни-на-заказ" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Услуги</a>
									<ul class="dropdown-menu dropdown-menu-light ms-0 py-1" style="border-radius: 5px;" aria-labelledby="navbarDarkDropdownMenuLink">
										<li><a class="dropdown-item nav-item" href="/кухни-на-заказ">Кухни на заказ</a></li>
										<li><a class="dropdown-item nav-item" href="/шкафы-на-заказ">Шкафы на заказ</a></li>
										<li><a class="dropdown-item nav-item" href="archive-product-portfolio2.html">Прихожие на заказ</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="our-works.html">Наши работы</a>
								</li>
								<li class="nav-item d-none d-lg-inline">
									<span class="nav-link">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/menu-decoration-point.svg">
									</span>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="archive-action-page.html">Акции</a>
								</li>
								<li class="nav-item d-none d-lg-inline">
									<span class="nav-link">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/menu-decoration-point.svg">
									</span>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contact.html">Контакты</a>
								</li>
								
								<!-- Mobile menu -->
				
								<li class="nav-item d-lg-none">
									<a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#callbackModal">Вызов замерщика</a>
								</li>
								<li class="nav-item d-lg-none">
									<div style="font-size: 12px; font-family: Gilroy-Light; text-transform: none;">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/location-ico.svg" style="width: 10px; position: relative; top: -2px;" class="me-1">
										<span>гор. Рязань, ул. Чапаева, 56</span>
									</div>
									<a class="nav-link top-menu-tel pt-1 pb-1" href="tel:89511014610">8 (951) 101-46-10</a>
									<div class="mb-2" style="font-size: 12px; font-family: Gilroy-Light; text-transform: none;">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg" style="width: 10px; position: relative; top: 3px;" class="me-1 mb-2">Пн-Сб: с 10.00-19.00, Вс: с 10.00-17.00
									</div>
								</li>
								<li class="nav-item d-lg-none pb-2">
									<a class="ico-button pe-2" href="whatsapp://send?phone=+79256424787">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
									</a>
									<a class="ico-button pe-0" href="https://t.me/+79511014610" target="_blank">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg">
									</a>
								</li>	
								<!-- End mobile menu -->
							</ul>
						</div>

					</div>
				</nav>
				<!-- /Header nav bottom -->
			</header>
			<div class="container">
				<div class="row align-items-center home-section-height">
					<div class="col-xl-10 col-xxl-9">
						<h1 class="home-title mb-3">Каталог Кухонь По индивидуальным размерам на заказ от производителя</h1>
						<p class="home-subtitle mb-4">Изготовим качественную кухню с учетом Ваших пожеланий и особенностей помещения. Рассчитаем стоимость за 15 минут.</p>
						<a href="#" type="button" class="btn btn-lg btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</a>
					</div>	
				</div>
			</div>
		</section>
		<!-- /Home section -->
		
		
		
		<!-- Portfolio -->
		<section class="archive-portfolio-section-2 pb-5 bg-white">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs py-4">
							<nav class="woocommerce-breadcrumb" itemprop="breadcrumb"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/breadcrumbs-icon.svg"></a> / Католог / Кухни</nav>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="row">
							<div class="col header-text mb-5">
								<h2 class="pc-text">Каталог проектов для заказа кухни по Вашим размерам</h2>
								<p class="pc-text" style="font-family: 'HelveticaNeueCyr-Light';">Выбирайте из нашего каталога или присылайте Ваш проект</p>
								<h2 class="mobile-text">Наши работы</h2>
								<p class="mobile-text" style="font-family: 'HelveticaNeueCyr-Light';">Представляем с гордостью!</p>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg">
							</div>
						</div>
						<div class="row text-start mobile-wrap">
							<div style="width: 306px;">
								<div class="col-md-3 mobile-none" style="text-transform: uppercase; font-size: 14px; width: auto;">
									<h6 style="font-size: 14px;">Категории товаров</h6>
									<a href="#" class="category active" aria-current="true">Кухни <span>(50)</span></a>
									<a href="#" class="category">Шкафы <span>(50)</span></a>
									<a href="#" class="category">Гардеробные <span>(50)</span></a>
									<a href="#" class="category">Гостиные <span>(50)</span></a>
									<a href="#" class="category">Тумбы <span>(50)</span></a>
								</div>
								<div class="col-md-3 mt-4 mobile-none" style="text-transform: uppercase; font-size: 14px; width: auto;">
									<h6 style="font-size: 14px;">Наличие</h6>
									<div class="d-flex" style="align-items: center;">
										<label class="custom-checkbox">
											<input type="checkbox" class="category_check" name="Ready" id="Ready">
											<span></span>
										</label>										  
										<label for="Ready" class="category">Готовые <span>(50)</span></label>
									</div>
									<div class="d-flex" style="align-items: center;">
										<label class="custom-checkbox">
											<input type="checkbox" class="category_check" name="order" id="order" checked>
											<span></span>
										</label>
										<label for="order" class="category">На заказ <span>(50)</span></label>
									</div>
								</div>
								<div class="col-md-3 mt-4" style="text-transform: uppercase; font-size: 14px; width: auto; margin-bottom: 60px;">
									<h6 style="font-size: 14px;">Планировка</h6>
									<div class="d-flex" style="align-items: center;">
										<label class="custom-checkbox">
											<input type="checkbox" class="category_check" name="Straight" id="Straight" checked>
											<span></span>
										</label>
										<label for="Straight" class="category">Прямые <span>(50)</span></label>
									</div>
									<div class="d-flex" style="align-items: center;">
										<label class="custom-checkbox">
											<input type="checkbox" class="category_check" name="Corner" id="Corner" checked>
											<span></span>
										</label>
										<label for="Corner" class="category">Угловые <span>(50)</span></label>
									</div>
									<div class="d-flex" style="align-items: center;">
										<label class="custom-checkbox">
											<input type="checkbox" class="category_check" name="U-shaped" id="U-shaped" checked>
											<span></span>
										</label>
										<label for="U-shaped" class="category">П-образные <span>(50)</span></label>
									</div>
									<div class="d-flex" style="align-items: center;">
										<label class="custom-checkbox">
											<input type="checkbox" class="category_check" name="bar_counter" id="bar_counter" checked>
											<span></span>
										</label>
										<label for="bar_counter" class="category">С барной стойкой <span>(50)</span></label>
									</div>
									<div class="d-flex" style="align-items: center;">
										<label class="custom-checkbox">
											<input type="checkbox" class="category_check" name="island" id="island" checked>
											<span></span>
										</label>
										<label for="island" class="category">С островком <span>(50)</span></label>
									</div>
								</div>
								<div class="col-md-3 mt-4 mobile-none" style="text-transform: uppercase; font-size: 14px; width: auto;">
									<h6 style="font-size: 14px;">Материал фасада</h6>
									<div class="d-flex" style="align-items: center;">
										<label class="custom-checkbox">
											<input type="checkbox" class="category_check" name="Chipboard/Chipboard" id="Chipboard/Chipboard" checked>
											<span></span>
										</label>
										<label for="Chipboard/Chipboard" class="category">ДСП/ЛДСП <span>(50)</span></label>
									</div>
									<div class="d-flex" style="align-items: center;">
										<label class="custom-checkbox">
											<input type="checkbox" class="category_check" name="Tape" id="Tape" checked>
											<span></span>
										</label>
										<label for="Tape" class="category">Пленка <span>(50)</span></label>
									</div>
									<div class="d-flex" style="align-items: center;">
										<label class="custom-checkbox">
											<input type="checkbox" class="category_check" name="Enamel" id="Enamel">
											<span></span>
										</label>
										<label for="Enamel" class="category">Эмаль <span>(50)</span></label>
									</div>
									<div class="d-flex" style="align-items: center;">
										<label class="custom-checkbox">
											<input type="checkbox" class="category_check" name="Plastic" id="Plastic">
											<span></span>
										</label>
										<label for="Plastic" class="category">Пластик <span>(50)</span></label>
									</div>
									<div class="d-flex" style="align-items: center;">
										<label class="custom-checkbox">
											<input type="checkbox" class="category_check" name="AGT" id="AGT">
											<span></span>
										</label>
										<label for="AGT" class="category">AGT <span>(50)</span></label>
									</div>
									<div class="d-flex" style="align-items: center;">
										<label class="custom-checkbox">
											<input type="checkbox" class="category_check" name="Array" id="Array">
											<span></span>
										</label>
										<label for="Array" class="category">Массив <span>(50)</span></label>
									</div>
								</div>
								<div class="col-md-3 mt-4 mobile-none" style="text-transform: uppercase; font-size: 14px; width: auto;">
									<h6 style="font-size: 14px;">Стиль</h6>
									<div class="d-flex" style="align-items: center;">
										<label class="custom-checkbox">
											<input type="checkbox" class="category_check" name="Modern" id="Modern">
											<span></span>
										</label>
										<label for="Modern" class="category">Современные <span>(50)</span></label>
									</div>
									<div class="d-flex" style="align-items: center;">
										<label class="custom-checkbox">
											<input type="checkbox" class="category_check" name="Classic" id="Classic">
											<span></span>
										</label>
										<label for="Classic" class="category">Классические <span>(50)</span></label>
									</div>
								</div>
							</div>
							<div class="row mobile-width">
								<div class="col-md-4 mb-5" style="padding-right: 0;">
									<a href="single-portfolio-product-page.html">
										<div class="approximation project-container-2 rounded">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card (10).jpg" class="img-fluid" alt="" decoding="async" />
											<div class="card-wrapper project-container-2-footer">
												<div class="row" style="padding: 10px;">
													<div class="col-6">
														<h3 style="color: #fff;">Кухня #090</h3>		
													</div>
													<div class="col-12 pc-sell">
														<h3 style="color: #fff;" >₽105 000</h3>
													</div>
												</div>
											</div>	
										</div>
									</a>
								</div>
								<div class="col-md-4 mb-5" style="padding-right: 0;">
									<a href="single-portfolio-product-page.html">
										<div class="approximation project-container-2 rounded">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card (2).jpg" class="img-fluid" alt="" decoding="async" />	
											<div class="card-wrapper project-container-2-footer">
												<div class="row" style="padding: 10px;">
													<div class="col-6">
														<h3 style="color: #fff;">Кухня #090</h3>		
													</div>
													<div class="col-12 pc-sell">
														<h3 style="color: #fff;" >₽105 000</h3>
													</div>
												</div>
											</div>	
										</div>
									</a>
								</div>
								<div class="col-md-4 mb-5" style="padding-right: 0;">
									<a href="single-portfolio-product-page.html">
										<div class="approximation project-container-2 rounded">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card (3).jpg" class="img-fluid" alt="" decoding="async" />	
											<div class="card-wrapper project-container-2-footer">
												<div class="row" style="padding: 10px;">
													<div class="col-6">
														<h3 style="color: #fff;">Кухня #090</h3>		
													</div>
													<div class="col-12 pc-sell">
														<h3 style="color: #fff;" >₽105 000</h3>
													</div>
												</div>
											</div>	
										</div>
									</a>	
								</div>
								<div class="col-md-4 mb-5" style="padding-right: 0;">	
									<a href="single-portfolio-product-page.html">
										<div class="approximation project-container-2 rounded">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card (4).jpg" class="img-fluid" alt="" decoding="async" />	
											<div class="card-wrapper project-container-2-footer">
												<div class="row" style="padding: 10px;">
													<div class="col-6">
														<h3 style="color: #fff;">Кухня #090</h3>		
													</div>
													<div class="col-12 pc-sell">
														<h3 style="color: #fff;" >₽105 000</h3>
													</div>
												</div>
											</div>	
										</div>
									</a>
								</div>
								<div class="col-md-4 mb-5" style="padding-right: 0;">
									<a href="single-portfolio-product-page.html">
										<div class="approximation project-container-2 rounded">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card (5).jpg" class="img-fluid" alt="" decoding="async" fetchpriority="high" />
											<div class="card-wrapper project-container-2-footer">
												<div class="row" style="padding: 10px;">
													<div class="col-6">
														<h3 style="color: #fff;">Кухня #090</h3>		
													</div>
													<div class="col-12 pc-selll">
														<h3 style="color: #fff;" >₽105 000</h3>
													</div>
												</div>
											</div>	
										</div>
									</a>
								</div>
								<div class="col-md-4 mb-5" style="padding-right: 0;">
									<a href="single-portfolio-product-page.html">
										<div class="approximation project-container-2 rounded">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card (6).jpg" class="img-fluid" alt="" decoding="async" />
											<div class="card-wrapper project-container-2-footer">
												<div class="row" style="padding: 10px;">
													<div class="col-6">
														<h3 style="color: #fff;">Кухня #090</h3>		
													</div>
													<div class="col-12 pc-sellllllllll">
														<h3 style="color: #fff;" >₽105 000</h3>
													</div>
												</div>
											</div>	
										</div>
									</a>
								</div>
								<div class="col-md-4 mb-5" style="padding-right: 0;">
									<a href="single-portfolio-product-page.html">
										<div class="approximation project-container-2 rounded">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card (7).jpg" class="img-fluid" alt="" decoding="async" />	
											<div class="card-wrapper project-container-2-footer">
												<div class="row" style="padding: 10px;">
													<div class="col-6">
														<h3 style="color: #fff;">Кухня #090</h3>		
													</div>
													<div class="col-12 pc-selll">
														<h3 style="color: #fff;" >₽105 000</h3>
													</div>
												</div>
											</div>	
										</div>
									</a>
								</div>
								<div class="col-md-4 mb-5" style="padding-right: 0;">
									<a href="single-portfolio-product-page.html">
										<div class="approximation project-container-2 rounded">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card (8).jpg" class="img-fluid" alt="" decoding="async" />
											<div class="card-wrapper project-container-2-footer">
												<div class="row" style="padding: 10px;">
													<div class="col-6">
														<h3 style="color: #fff;">Кухня #090</h3>		
													</div>
													<div class="col-12 pc-sell">
														<h3 style="color: #fff;" >₽105 000</h3>
													</div>
												</div>
											</div>	
										</div>
									</a>
								</div>
								<div class="col-md-4 mb-5" style="padding-right: 0;">
									<a href="single-portfolio-product-page.html">
										<div class="approximation project-container-2 rounded">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card (9).jpg" class="img-fluid" alt="" decoding="async" />	
											<div class="card-wrapper project-container-2-footer">
												<div class="row" style="padding: 10px;">
													<div class="col-6">
														<h3 style="color: #fff;">Кухня #090</h3>		
													</div>
													<div class="col-12 pc-sell">
														<h3 style="color: #fff;" >₽105 000</h3>
													</div>
												</div>
											</div>	
										</div>
									</a>
								</div>
								<div class="col-md-4 mb-5" style="padding-right: 0;">
									<a href="single-portfolio-product-page.html">
										<div class="approximation project-container-2 rounded">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card (10).jpg" class="img-fluid" alt="" decoding="async" />
											<div class="card-wrapper project-container-2-footer">
												<div class="row" style="padding: 10px;">
													<div class="col-6">
														<h3 style="color: #fff;">Кухня #090</h3>		
													</div>
													<div class="col-12 pc-sell">
														<h3 style="color: #fff;" >₽105 000</h3>
													</div>
												</div>
											</div>	
										</div>
									</a>
								</div>
								<div class="col-md-4 mb-5" style="padding-right: 0;">
									<a href="single-portfolio-product-page.html">
										<div class="approximation project-container-2 rounded">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card (1).jpg" class="img-fluid" alt="">
											<div class="card-wrapper project-container-2-footer">
												<div class="row" style="padding: 10px;">
													<div class="col-6">
														<h3 style="color: #fff;">Кухня #090</h3>		
													</div>
													<div class="col-12 pc-sell">
														<h3 style="color: #fff;" >₽105 000</h3>
													</div>
												</div>
											</div>	
										</div>
									</a>
								</div>
								<div class="col-md-4 mb-5" style="padding-right: 0;">
									<a href="single-portfolio-product-page.html">
										<div class="approximation project-container-2 rounded">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card (1).jpg" class="img-fluid" alt="">
											<div class="card-wrapper project-container-2-footer">
												<div class="row" style="padding: 10px;">
													<div class="col-6">
														<h3 style="color: #fff;">Кухня #090</h3>		
													</div>
													<div class="col-12 pc-sell">
														<h3 style="color: #fff;" >₽105 000</h3>
													</div>
												</div>
											</div>	
										</div>
									</a>
								</div>
								<div class="pages">
									<div class="pages_box">
										<a href="#" class="page-link" style="border-top-left-radius: 5px; border-bottom-left-radius: 5px;">←</a>
										<a href="#" class="page-link archive-product-page active">1</a>
										<a href="#" class="page-link archive-product-page">2</a>
										<a href="#" class="page-link archive-product-page">3</a>
										<a href="#" class="page-link archive-product-page">...</a>
										<a href="#" class="page-link archive-product-page">7</a>
										<a href="#" class="page-link archive-product-page">8</a>
										<a href="#" class="page-link archive-product-page">9</a>
										<a href="#" class="page-link" style="border-top-right-radius: 5px; border-bottom-right-radius: 5px;">→</a>
									</div>
								</div>
								<div class="row text-md-center pc-btn-more">
									<div class="col">
										<a href="#" type="button" class="btn btn-lg btn-corporate-color-1" style="padding: 8px 40px;">Показать еще</a>
									</div>
								</div>	
							</div>
						</div>	
					</div>
				</div>
			</div>
		</section>
		<!-- /Portfolio -->

        
		<!-- Actions section -->
		<?php
        get_template_part('template-parts/action/action', '', [
            'show_button' => 'false',
            'show_breadcrumbs' => 'false', 
            'actions_count' => '5',
            'bg_color' => 'bg-light',
            'section_title' => 'Наши акции',
            'card_type' => 'modal',
            'filter_category' => 'closets'
        ]);
        ?>
		<!-- /Actions section -->

		
		<!-- Gradient order section -->
		<section class="gradient-order-section bg-white" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/gradient-order-section-bg.jpg);">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-5 text-md-end">
						<h2 class="text-light">Рассчитаем стоимость за 15 минут</h2>
						<p class="section-description archive-portfolio text-light mb-3">Хотите узнать стоимость качественной кухни с учетом всех Ваших пожеланий и особенностей помещения? Это бесплатно и ни к чему Вас не обязывает!</p>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
						<br>
						<a href="#" type="button" class="btn btn-lg btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</a>

						<div class="row justify-content-md-end">
							<div class="col">
								<ul class="nav justify-content-md-end mt-4">
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
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-7"></div>
				</div>
			</div>
		</section>
		<!-- End gradient order section -->

		<!-- About section -->
		<section class="about-section bg-light py-5" style="margin-top: 60px;">
			<div class="container">
				<div class="row">
					<div class="col text-md-center">
						<h2>О нас</h2>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" style="margin-bottom: 60px;">
					</div>
				</div>
				<!-- Слайдер Bootstrap -->
				<div class="row justify-content-between about_box">
					<div class="col-12 col-lg-6 order-2 order-lg-first text-center">
						<div id="carouselExampleIndicators532" class="carousel slide mb-4" data-bs-ride="carousel" data-bs-interval="999999999">
							<div class="carousel-inner rounded">
								<div class="carousel-item active">
									<a onClick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-1');">
										<div class="single-product-img approximation">
											<img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/1.webp" class="d-block w-100" loading="lazy" alt="...">
											<div class="magnifier"></div>
										</div>
									</a>
								</div>
								<div class="carousel-item">
									<a onClick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-2');">
										<div class="single-product-img approximation">
											<img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/2.webp" class="d-block w-100" loading="lazy" alt="...">
											<div class="magnifier"></div>
										</div>
									</a>
								</div>
								<div class="carousel-item">
									<a onClick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-3');">
										<div class="single-product-img approximation">
											<img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/3.webp" class="d-block w-100" loading="lazy" alt="...">
											<div class="magnifier"></div>
										</div>
									</a>
								</div>
								<div class="carousel-item">
									<a onClick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-4');">
										<div class="single-product-img approximation">
											<img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/4.webp" class="d-block w-100" loading="lazy" alt="...">
											<div class="magnifier"></div>
										</div>
									</a>
								</div>
								<div class="carousel-item">
									<a onClick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-5');">
										<div class="single-product-img approximation">
											<img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/5.webp" class="d-block w-100" loading="lazy" alt="...">
											<div class="magnifier"></div>
										</div>
									</a>
								</div>
								<div class="carousel-item">
									<a onClick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-6');">
										<div class="single-product-img approximation">
											<img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/6.webp" class="d-block w-100" loading="lazy" alt="...">
											<div class="magnifier"></div>
										</div>
									</a>
								</div>
								<div class="carousel-item">
									<a onClick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-7');">
										<div class="single-product-img approximation">
											<img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/7.webp" class="d-block w-100" loading="lazy" alt="...">
											<div class="magnifier"></div>
										</div>
									</a>
								</div>
								<div class="carousel-item">
									<a onClick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-8');">
										<div class="single-product-img approximation">
											<img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/8.webp" class="d-block w-100" loading="lazy" alt="...">
											<div class="magnifier"></div>
										</div>
									</a>
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators532"  data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators532"  data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>
					<!-- Описание -->
					<div class="col-12 col-lg-5 offset-lg-1 order-1 order-lg-last mb-lg-0 description_about">
						<p class="text-start">Студия кухни «Мозаика» поможет каждому клиенту при выборе мебели по индивидуальным размерам, бесплатный дизайн-проект любой сложности, большой выбор мебели по цветовой гамме и ценовой категории.</p>
						<p class="text-start">Обширный ассортимент фасадного материала такие как: Fundermax, Альтернатив, AGT, Feelwood, TSS. Для каждого клиента подбираем по его желаниям и возможностям европейскую фурнитуру, таких фирм как: Blum, Boyard, Hettich, VIBO и др. А также у нас можно укомплектовать мебель кухонной техникой известных фирм: Эликор, Midea, Куперсберг и др.</p>
						<p class="text-start">Нашими партнерами являются крупные фабрики «Ульяновск», «CUCINA», г. Пенза «Лев Мебель», «Мебель стиль».</p>
					</div>
				</div>
			</div>
		</section>
		<!-- /About section -->
		<!-- Gallery wrapper -->
		<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">
		
			<div id="gallery-2" class="carousel slide" data-bs-ride="false" data-bs-interval="false" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
						
				<!--div class="carousel-indicators">
							</div-->
				
				<div class="carousel-inner modal_box_paint h-100" style="width: 100%;">
					<div id="img-1-0" class="carousel-item carousel-item-2 h-100 active">
						<div class="row align-items-center h-100">
							<div class="col text-center">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-section-slide-1.jpg" class="img-fluid" loading="lazy" alt="...">
							</div>
						</div>
					</div>
					<div id="img-2-0" class="carousel-item carousel-item-2 h-100">
						<div class="row align-items-center h-100">
							<div class="col text-center">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-section-slide-2.jpeg" class="img-fluid" loading="lazy" alt="...">
							</div>
						</div>
					</div>
					<div id="img-3-0" class="carousel-item carousel-item-2 h-100">
						<div class="row align-items-center h-100">
							<div class="col text-center">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-section-slide-3.jpeg" class="img-fluid" loading="lazy" alt="...">
							</div>
						</div>
					</div>
					<div id="img-4-0" class="carousel-item carousel-item-2 h-100">
						<div class="row align-items-center h-100">
							<div class="col text-center">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-section-slide-4.jpeg" class="img-fluid" loading="lazy" alt="...">
							</div>
						</div>
					</div>
					<div id="img-5-0" class="carousel-item carousel-item-2 h-100">
						<div class="row align-items-center h-100">
							<div class="col text-center">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-section-slide-5.heic" class="img-fluid" loading="lazy" alt="...">
							</div>
						</div>
					</div>
					<div id="img-6-0" class="carousel-item carousel-item-2 h-100">
						<div class="row align-items-center h-100">
							<div class="col text-center">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-section-slide-6.jpeg" class="img-fluid" loading="lazy" alt="...">
							</div>
						</div>
					</div>
					<div id="img-7-0" class="carousel-item carousel-item-2 h-100">
						<div class="row align-items-center h-100">
							<div class="col text-center">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-section-slide-7.jpeg" class="img-fluid" loading="lazy" alt="...">
							</div>
						</div>
					</div>
					<div id="img-8-0" class="carousel-item carousel-item-2 h-100">
						<div class="row align-items-center h-100">
							<div class="col text-center">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-section-slide-8.jpeg" class="img-fluid" loading="lazy" alt="...">
							</div>
						</div>
					</div>
					<div id="img-9-0" class="carousel-item carousel-item-2 h-100">
						<div class="row align-items-center h-100">
							<div class="col text-center">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-section-slide-9.jpeg" class="img-fluid" loading="lazy" alt="...">
							</div>
						</div>
					</div>
					<div id="img-10-0" class="carousel-item carousel-item-2 h-100">
						<div class="row align-items-center h-100">
							<div class="col text-center">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-section-slide-10.jpeg" class="img-fluid" loading="lazy" alt="...">
							</div>
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#gallery-2" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#gallery-2" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		
			<!-- Кнопка закрытия галереи -->
			<button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
		</div> <!-- #galleryWrapper -->
		<script>
			/* Функция открытия галереи */
			function galleryOn(gal, img) {
				var gallery = gal; // Получаем ID галереи
				var image = img; // Получаем ID картинки
				// Открываем обертку галереи
				document.getElementById('galleryWrapper').style.display = 'block';
				
	
				
				// Открываем галерею
				if ( gallery == "gallery-2" ) { document.getElementById("gallery-2").style.display = "block"; }
				
				
				// Открываем изображения и индикаторы изображений галереи
				if ( image == "img-1-0" ) {
					document.getElementById("img-1-0").classList.add("active");
					document.getElementById("ind-1-0").classList.add("active");
				}
				if ( image == "img-2-0" ) {
					document.getElementById("img-2-0").classList.add("active");
					document.getElementById("ind-2-0").classList.add("active");
				}
				if ( image == "img-3-0" ) {
					document.getElementById("img-3-0").classList.add("active");
					document.getElementById("ind-3-0").classList.add("active");
				}
				if ( image == "img-4-0" ) {
					document.getElementById("img-4-0").classList.add("active");
					document.getElementById("ind-4-0").classList.add("active");
				}
				if ( image == "img-5-0" ) {
					document.getElementById("img-5-0").classList.add("active");
					document.getElementById("ind-5-0").classList.add("active");
				}
				if ( image == "img-6-0" ) {
					document.getElementById("img-6-0").classList.add("active");
					document.getElementById("ind-6-0").classList.add("active");
				}
				if ( image == "img-7-0" ) {
					document.getElementById("img-7-0").classList.add("active");
					document.getElementById("ind-7-0").classList.add("active");
				}
				if ( image == "img-8-0" ) {
					document.getElementById("img-8-0").classList.add("active");
					document.getElementById("ind-8-0").classList.add("active");
				}
				if ( image == "img-9-0" ) {
					document.getElementById("img-9-0").classList.add("active");
					document.getElementById("ind-9-0").classList.add("active");
				}
				if ( image == "img-10-0" ) {
					document.getElementById("img-10-0").classList.add("active");
					document.getElementById("ind-10-0").classList.add("active");
				}
				
				if ( image == "img-1-0" ) { document.getElementById("img-1-0").classList.add("active"); document.getElementById("ind-1-0").classList.add("active"); }
				if ( image == "img-2-0" ) { document.getElementById("img-2-0").classList.add("active"); document.getElementById("ind-2-0").classList.add("active"); }
				if ( image == "img-3-0" ) { document.getElementById("img-3-0").classList.add("active"); document.getElementById("ind-3-0").classList.add("active"); }
				if ( image == "img-4-0" ) { document.getElementById("img-4-0").classList.add("active"); document.getElementById("ind-4-0").classList.add("active"); }
				if ( image == "img-5-0" ) { document.getElementById("img-5-0").classList.add("active"); document.getElementById("ind-5-0").classList.add("active"); }
				if ( image == "img-6-0" ) { document.getElementById("img-6-0").classList.add("active"); document.getElementById("ind-6-0").classList.add("active"); }
				if ( image == "img-7-0" ) { document.getElementById("img-7-0").classList.add("active"); document.getElementById("ind-7-0").classList.add("active"); }
				if ( image == "img-8-0" ) { document.getElementById("img-8-0").classList.add("active"); document.getElementById("ind-8-0").classList.add("active"); }
				if ( image == "img-9-0" ) { document.getElementById("img-9-0").classList.add("active"); document.getElementById("ind-9-0").classList.add("active"); }
				if ( image == "img-10-0" ) { document.getElementById("img-10-0").classList.add("active"); document.getElementById("ind-10-0").classList.add("active"); }
			}
			
	
			// Кнопка закрытия галереи
			function closeGallery() {
				// Закрываем обертку галереи
				document.getElementById('galleryWrapper').style.display = 'none';
				
				// Закрываем галерию
				document.getElementById("gallery-2").style.display = "none";
	
				// Закрываем изображения и индикаторы изображений галерии
				document.getElementById("img-1-0").classList.remove("active");
				document.getElementById("ind-1-0").classList.remove("active");
				document.getElementById("img-2-0").classList.remove("active");
				document.getElementById("ind-2-0").classList.remove("active");
				document.getElementById("img-3-0").classList.remove("active");
				document.getElementById("ind-3-0").classList.remove("active");
				document.getElementById("img-4-0").classList.remove("active");
				document.getElementById("ind-4-0").classList.remove("active");
				document.getElementById("img-5-0").classList.remove("active");
				document.getElementById("ind-5-0").classList.remove("active");
				document.getElementById("img-6-0").classList.remove("active");
				document.getElementById("ind-6-0").classList.remove("active");
				document.getElementById("img-7-0").classList.remove("active");
				document.getElementById("ind-7-0").classList.remove("active");
				document.getElementById("img-8-0").classList.remove("active");
				document.getElementById("ind-8-0").classList.remove("active");
				document.getElementById("img-9-0").classList.remove("active");
				document.getElementById("ind-9-0").classList.remove("active");
				document.getElementById("img-10-0").classList.remove("active");
				document.getElementById("ind-10-0").classList.remove("active");
			}
		</script>
		<!-- /About section -->

		<!-- Advantage section -->
		<section class="advantage bg-white py-5">
			<div class="container">
				<div class="row">
					<div class="col align-items-center text-md-center">
						<h2>Наши преимущества</h2>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
						
						<div class="row">
							<div class="col-lg-6 mb-4">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/measurement-ico.svg" class="img-fluid">
									</div>
									<div class="col-9 col-md-10">
										<h3 class="advantage-title text-start">Замер и дизайн-проект бесплатно</h3>
										<p class="text-start">При заключении договора наш специалист бесплатно сделает замер и разработает дизайн-проект Вашей будущей кухни.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 mb-4">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-advantage-ico.svg" class="img-fluid">
									</div>
									<div class="col-9 col-md-10">
										<h3 class="advantage-title text-start">Собственное производство</h3>
										<p class="text-start">Мы обеспечиваем полный цикл изготовления кухни (проект, производство, доставка, монтаж), без перекладывания обязанностей на посредников.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 mb-4">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/advantage-guarantee-ico.svg" class="img-fluid">
									</div>
									<div class="col-9 col-md-10">
										<h3 class="advantage-title text-start">Гарантия 2 года</h3>
										<p class="text-start">Мы даем максимальную гарантию на свои кухни, т.к. уверены в профессионализме своих сотрудников и используемых материалах.</p>
									</div>	
								</div>
							</div>
							<div class="col-lg-6 mb-4">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/discount-ico.svg" class="img-fluid">
									</div>
									<div class="col-9 col-md-10">
										<h3 class="advantage-title text-start">Скидка +20% при повторном обращении</h3>
										<p class="text-start">Мы изготавливаем любую корпусную мебель, а значит Вы можете заказать у нас шкаф, гостиную или другую мебель в квартиру в едином стиле по выгодной цене.</p>
									</div>	
								</div>
							</div>
							<div class="col-lg-6 mb-4">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/measurement-ico.svg" class="img-fluid">
									</div>
									<div class="col-9 col-md-10">
										<h3 class="advantage-title text-start">Замер и дизайн-проект бесплатно</h3>
										<p class="text-start">При заключении договора наш специалист бесплатно сделает замер и разработает дизайн-проект Вашей будущей кухни</p>
									</div>	
								</div>
							</div>
							<div class="col-lg-6 mb-4">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-advantage-ico.svg" class="img-fluid">
									</div>
									<div class="col-9 col-md-10">
										<h3 class="advantage-title text-start">Собственное производство</h3>
										<p class="text-start">Мы обеспечиваем полный цикл изготовления кухни (проект, производство, доставка, монтаж), без перекладывания обязанностей на посредников.</p>
									</div>	
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
		<!-- /Advantage section -->

		<!-- Process -->
		<section class="advantages bg-light py-5">
			<div class="container">
				<div class="row">
					<div class="col text-md-center">
						<h2 class="mb-3">Как заказать</h2>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">

						<div class="row justify-content-around">
							<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
								<div class="row align-items-center">
									<div class="col-4 text-center">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/1.svg" class="img-fluid">
									</div>
									<div class="col-4">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/call-agent-ico.svg" class="img-fluid">
									</div>
								</div>
								<div class="row pt-3">
									<div class="col text-start">
										<h3>Первичный контакт</h3>
										<p class="mb-0">Свяжитесь с нами любым удобным способом, расскажите, что Вы хотите. При наличии дизайн-проекта, наброска, размеров или другой информации — высылаете нам на почту, в Telegram, Whatsapp или в форме обратной связи.
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
								<div class="row align-items-center">
									<div class="col-4 text-center">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/2.svg" class="img-fluid">
									</div>
									<div class="col-4 text-start">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/calc-ico.svg" class="img-fluid">
									</div>
								</div>
								<div class="row pt-3">
									<div class="col text-start">
										<h3>Расчет стоимости</h3>
										<p class="mb-0">На основании полученой от Вас информации мы сделаем предварительный расчет стоимости и сроков производства. При необходимости уточним детали.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
								<div class="row align-items-center">
									<div class="col-4 text-center ">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/3.svg" class="img-fluid">
									</div>
									<div class="col-4">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/doc-ico.svg" class="img-fluid">
									</div>
								</div>
								<div class="row pt-3">
									<div class="col text-start">
										<h3>Заключение договора</h3>
										<p class="mb-0">Если Вас все устраивает, мы приезжаем к Вам на замер, утверждаем сроки, материалы, заключаем договор. Вы вносите предоплату и кухня поступает в производство.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 mb-0">
								<div class="row align-items-center">
									<div class="col-4 text-center">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/4.svg" class="img-fluid">
									</div>
									<div class="col-4">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/delivery.svg" class="img-fluid">
									</div>
								</div>
								<div class="row pt-3">
									<div class="col text-start">
										<h3>Доставка и установка</h3>
										<p class="mb-0">После окончания производства доставляем и устанавливаем кухню в заранее оговоренные дату и время. После установки производим окончательные расчеты.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Process -->

		<!-- Frequent questions -->
		<section class="advantages bg-white py-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10 text-center">
						<h2 class="mb-3">Частые вопросы</h2>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
						<div class="accordion text-start" id="accordionExample">
							<div class="accordion-item mb-3">
								<h3 class="accordion-header" id="heading-1">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
										Сколько времени изготавливается кухня?
									</button>
								</h3>
								<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="mb-0">Срок производства зависит от материалов и составляет от 10 рабочих дней. Сроки, в обязательном порядке, согласовываются с заказчиком при заключении договора.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item mb-3">
								<h3 class="accordion-header" id="heading-2">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
										Как вызвать специалиста для проведения замера?
									</button>
								</h3>
								<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Вызвать замерщика Вы можете любым из способов:</p>
										<ul class="mb-0">
											<li>оставить онлайн-заявку или заказать обратный звонок на сайте;</li> <li>написать на электронный адрес: <a style="text-decoration: none;" target="_blank" href="mailto:mozaika62@bk.ru" itemprop="email"><b>mozaika62@bk.ru</b></a>;</li>
											<li>позвонить по телефону ☎ <a href="tel:89511014610" style="text-decoration: none;"><b>8 (951) 101-46-10‬</b></a>;</li>
											<li>написать в Telegram или Whatsapp.</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="accordion-item mb-3">
								<h3 class="accordion-header" id="heading-3">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
										Сколько стоит вызов замерщика?
									</button>
								</h3>
								<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="mb-0">Стоимость выезда замерщика с образцами материалов составляет 2000 руб. Но если Вы заключаете договор, то замер для Вас обходится бесплатно, а оплаченный Вами выезд вычитается из суммы оплаты.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item mb-3">
								<h3 class="accordion-header" id="heading-4">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
										Если эскиз кухни уже есть, можно ли по нему получить расчет?
									</button>
								</h3>
								<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Конечно!</p>
										<p class="mb-0">Направьте эскиз с Вашей кухней (или другой корпусной мебелью) на нашу электронную почту: <a style="text-decoration: none;" target="_blank" href="mailto:mozaika62@bk.ru" itemprop="email"><b>mozaika62@bk.ru</b></a>, дополнительно указав в письме материал фасадов, комплектацию, габариты мебели и мы предоставим расчет в ответном письме.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item mb-3">
								<h3 class="accordion-header" id="heading-4">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
										У вас цены ниже, чем обычно по городу. Почему?
									</button>
								</h3>
								<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionExample">
									<div class="accordion-body pb-2">
										<p class="mb-0">Наличие собственного производства, оптовые закупки расходных материалов и большое количество заказов позволяют нам сохранять цены на докризисном уровне и делать нашим клиентам предложения на самых выгодных условиях.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item mb-3">
								<h3 class="accordion-header" id="heading-6">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
										Какая модель кухни самая популярная?
									</button>
								</h3>
								<div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionExample">
									<div class="accordion-body pb-2">
										<p class="mb-0">Предпочтения наших клиентов настолько разнообразны, что выделить какую-либо модель достаточно сложно. При разработке проекта мы учитываем все Ваши пожелания, а благодаря широчайшей коллекции фасадов и столешниц, могут быть сотни разных вариаций. В одном можем уверить Вас точно: какая бы ни была кухня от нашей фабрики по стилю или конфигурации, она идеально впишется в ваш интерьер и прослужит долгие годы.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Frequent questions -->

		
		<!-- Gradient order section -->
		<section class="gradient-order-section bg-light" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/sec-bg2.jpg);">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-5 text-md-end">
						<h2>Рассчитаем стоимость за 15 минут</h2>
						<p class="section-description archive-portfolio mb-3">Хотите узнать стоимость качественной кухни с учетом всех Ваших пожеланий и особенностей помещения? Это бесплатно и ни к чему Вас не обязывает!</p>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
						<br>
						<a href="#" type="button" class="btn btn-lg btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</a>

						<div class="row justify-content-md-end">
							<div class="col">
								<ul class="nav justify-content-md-end mt-4">
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
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-7"></div>
				</div>
			</div>
		</section>
		<!-- End gradient order section -->
		
		
		
		<!-- CONTACTS SECTION 4 -->
		<section class="contacts-section-4">
			
			<!-- Desktop version -->
			<div class="container py-5 d-none d-xl-block">
				<div class="row align-items-center">
					<div class="col-xl-2">
						<a href="#">
							<img id="navbar-brand-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo-light.svg" class="img-fluid">
						</a>
					</div>
					<div class="col-xl-8">
						<ul class="nav justify-content-center">
							<li class="nav-item">
								<a class="nav-link" href="/" style="transition: .25s;">Главная</a>
							</li>
							<li class="nav-item d-none d-lg-inline">
								<span class="nav-link px-0">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/menu-decoration-point.svg">
								</span>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle pe-0 active" aria-current="page" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Каталог</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item active" href="/кухни-на-заказ">Кухни</a></li>
									<li><a class="dropdown-item" href="#">Шкафы</a></li>
									<li><a class="dropdown-item" href="#">Прихожие</a></li>
									<li><a class="dropdown-item" href="#">Обеденные группы</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle pe-0" href="/кухни-на-заказ" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Услуги</a>
								<ul class="dropdown-menu dropdown-menu-light ms-2 py-1" style="border-radius: 5px;" aria-labelledby="navbarDarkDropdownMenuLink">
									<li><a class="dropdown-item nav-item" href="/кухни-на-заказ">Кухни на заказ</a></li>
									<li><a class="dropdown-item nav-item" href="/шкафы-на-заказ">Шкафы на заказ</a></li>
									<li><a class="dropdown-item nav-item" href="archive-product-portfolio2.html">Прихожие на заказ</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="our-works.html">Наши работы</a>
							</li>
							<li class="nav-item d-none d-lg-inline">
								<span class="nav-link px-0">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/menu-decoration-point.svg">
								</span>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="archive-action-page.html">Акции</a>
							</li>
							<li class="nav-item d-none d-lg-inline">
								<span class="nav-link px-0">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/menu-decoration-point.svg">
								</span>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.html">Контакты</a>
							</li>
						</ul>
					</div>
					<div class="col-xl-2 text-end">
						<a href="tel:‪89511014610" class="contacts-phone">‪
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" class="me-2" style="position: relative; bottom: 1px;">8 <span>(951)</span> 101-46-10
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
										<div class="nav-li-float-right" >
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
										<div class="nav-li-float-right" >
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
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-ico.svg" >
										</div>
										<div class="nav-li-float-right" >
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
										<div class="nav-li-float-right" >
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
							<img id="navbar-brand-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo-light.svg" class="img-fluid">
						</a>
						<ul class="ps-0 pt-3 pb-2">
							<li class="nav-item">
								<a href="#" class="nav-link ps-0 pb-2">
									<div style="display: flex;" class="align-items-center">
										<div class="nav-li-float-left">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/location-ico.svg">
										</div>
										<div class="nav-li-float-right" >
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
										<div class="nav-li-float-right" >
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
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-ico.svg" >
										</div>
										<div class="nav-li-float-right" >
											<span>Обратный звонок</span>
										</div>
										<div style="clear: both;"></div>
									</div>
								</a>
							</li>
						</ul>
						<a href="tel:‪89511014610" class="contacts-phone">
							<div style="display: flex;" class="align-items-center">
								<div class="nav-li-float-left">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" style="position: relative; bottom: 1px;">
								</div>
								<div class="nav-li-float-right" >
									8 <span>(951)</span> 101-46-10
								</div>
								<div style="clear: both;"></div>
							</div>
						</a>
						<ul class="nav pt-4 pb-3">
							<li class="nav-item">
								<a class="nav-link ico-button ps-0 pe-2" href="https://wa.me/79511014610?web=1&app_absent=1" target="_blank">
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
							<div class="col-6">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link ps-0" href="#">Главная</a>
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
										<a class="nav-link ps-0 dropdown-toggle active" aria-current="page" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Каталог</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item active" href="/кухни-на-заказ">Кухни</a></li>
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
						</div>
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
								<a href="#" class="text-light">сайт100.рф</a>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
		</section>
		<!-- /CONTACTS SECTION 4 -->

                <?php
            // Не показываем на странице с шаблоном "Кучина"
            $is_cucina_page = is_page_template( 'cucina.php' );
            if ( ! $is_cucina_page ) : ?>

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
                    const HIDE_DURATION = 12 * 60 * 60 * 1000; // 12 часов в мс
                    const SHOW_DELAY    = 15 * 1000;           // 15 секунд

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
                        setTimeout(function () {
                            popup.classList.add('active');
                        }, SHOW_DELAY);
                    }

                    // Закрытие крестиком
                    btnClose.addEventListener('click', closePopup);

                    // Закрытие «Не интересует»
                    btnDismiss.addEventListener('click', closePopup);
                });
            </script>
        <?php endif; ?>

		
		
		<!-- Callback Modal -->
		<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="callback-mail.php" class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="callbackModalLabel">Обратный звонок</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<p><small>Мы свяжемся с Вами в течение 10 минут и ответим на все вопросы! Для звонка введите Ваше имя и телефон.</small></p>
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
						<button type="submit" class="btn btn-corporate-color-1 mx-auto">Жду звонка</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Callback Modal -->
		
		
		<!-- Рассчитать стоимость с загрузкой изображения -->
		<div class="modal fade" id="calculatePriceWithDownloadModal" tabindex="-1" aria-labelledby="calculatePriceWithDownloadLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="mails/get_calculate.php" class="modal-content" enctype="multipart/form-data">
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
								<textarea type="text" rows="3" name="mes" class="form-control form-control-corporate-color-1" placeholder=""></textarea>
							</div>
							<div class="col-12">
								<p><small>Вы можете прикрепить проект, изображение или схематично нарисованный рисунок кухни.</small></p>
							</div>
							<div class="mb-3">
								<div class="input-group custom-file-button">
									<label class="btn btn-lg btn-corporate-color-1 input-group-text" style="border-radius: 8px;" for="inputGroupFile">Прикрепить</label>
									<input type="file" name="file[]" class="form-control" id="inputGroupFile" accept=".jpg,.jpeg,.png,.pdf,.heic" multiple>
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<input type="text" name="name" class="form-control form-control-corporate-color-1" placeholder="Ваше имя">
							</div>
							<div class="col-md-6 mb-3">
								<input type="text" name="tel" class="form-control form-control-corporate-color-1 telMask" placeholder="Ваш телефон*" required>
							</div>
							<div class="col-md-6">
                                <input type="hidden" id="g-recaptcha-response-calculatePriceWithDownload" name="g-recaptcha-response">
								<button type="submit" class="btn btn-corporate-color-1">Отправить</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- /Рассчитать стоимость с загрузкой изображения -->
		

		<!-- Рассчитать стоимость без загрузки изображения -->
		<div class="modal fade" id="calculatePriceWithoutDownloadModal" tabindex="-1" aria-labelledby="calculatePriceWithoutDownloadLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="mails/get_calculate.php" class="modal-content" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title" id="calculatePriceWithoutDownloadLabel">Рассчитать стоимость</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row pb-2">
							<div class="col-12">
								<p>Расчет по кухне #099</p>
							</div>
							<div class="col-12 mb-3">
								<textarea type="text" rows="3" name="mes" class="form-control form-control-corporate-color-1" placeholder="При желании укажите форму, размеры, материалы кухни или другую информацию"></textarea>
							</div>
							<div class="col-md-6 mb-3">
								<input type="text" name="name" class="form-control form-control-corporate-color-1" placeholder="Ваше имя">
							</div>
							<div class="col-md-6 mb-3">
								<input type="text" name="tel" class="form-control form-control-corporate-color-1 telMask" placeholder="Ваш телефон*" required>
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
			
			<div id="formBtn" class="callback-form-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Перезвонить Вам?">
				<a data-bs-toggle="modal" data-bs-target="#callbackModal"><div class="callback-form-button-ico"></div></a>
			</div>
			<div id="phoneBtn" class="callback-phone-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Позвонить">
				<a href="tel:84993900100"><div class="callback-phone-button-ico"></div></a>
			</div>
			<div id="whatsappBtn" class="callback-whatsapp-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp">
				<!-- Не открывает ссылку с ПК если не установлено приложение WhatsApp
				<a href="whatsapp://send?phone=+79361385058"><div class="callback-whatsapp-button-ico"></div></a> -->
				<!-- Другой вариант ссылки. Все равно не открывает Whatsapp если нет приложения -->
				<a href="https://wa.me/79511014610?web=1&app_absent=1" target="blank"><div class="callback-whatsapp-button-ico"></div></a>
				<!-- Еще варианты -->
				<!--a href="https://api.whatsapp.com/send/?phone=79361385058&text=Привет"><div class="callback-whatsapp-button-ico"></div></a-->
				<!--a href="https://wa.clck.bar/79361385058?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!"><div class="callback-whatsapp-button-ico"></div></a-->
			</div>
			<div id="telegramBtn" class="callback-telegram-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
				<a href="https://t.me/+79511014610" target="_blank"><div class="callback-telegram-button-ico"></div></a>
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
		<!-- Main scripts -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/theme.js"></script>
		
		<!-- Quiz scripts -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/quiz.js"></script>
		
		<!-- Menu -->
		<script>vyezjalo();</script>
		
		
		<!-- Telephone number mask -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/inputmask.min.js"></script>
		<script>
			var telMask = document.getElementsByClassName("telMask");
			var im = new Inputmask("+7(999)999-99-99");
			im.mask(telMask);
		</script>
		
		
		<!-- Загрузка изображений с приоритетом -->
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
		</script>

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