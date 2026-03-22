<?php
	
	/**
	 * Template Name: Акции
	 * Template Post Type: page
	**/
	
	include 'header.php';
	
?>
	
<!-- Home section -->
<div id="sp-home" class="scroll-points"></div>
<section class="site-wrap" style="height: 400px; z-index: auto;">
	<div class="jobs-home-section" style="min-height: 400px;"></div>
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
	</header>
	<div class="container">
		<div class="row align-items-center home-section-height min-home-section-height">
			<div class="col-xl-10 col-xxl-9">
				<h1 class="home-title">Акции</h1>
			</div>	
		</div>
	</div>
</section>
<!-- /Home section -->


<!-- Archive actions -->
<?php
get_template_part('template-parts/action/action', '', [
    'show_button' => 'false',
    'show_breadcrumbs' => 'true', 
    'actions_count' => 'all',
    'bg_color' => 'bg-white',
    'section_title' => 'Наши акции',
    'card_type' => 'modal',
    'additional_classes' => 'justify-content-lg-center'
]);
?>
<!-- /Archive actions -->


<?php include 'footer-1.php'; ?>