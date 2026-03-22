<?php
	
	/**
	 * Template Name: Страница архива кухонь
	 * Template Post Type: page, product_cat
	 **/

	defined( 'ABSPATH' ) || exit;

	get_header();

	/**
	 * Hook: woocommerce_before_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 * @hooked WC_Structured_Data::generate_website_data() - 30
	 */
	do_action( 'woocommerce_before_main_content' );

?>


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
		<div class="row align-items-center home-section-height">
			<div class="col-xl-10 col-xxl-9">
				<h1 class="home-title mb-3">Каталог кухонь по индивидуальным размерам на заказ от производителя</h1>
				<p class="home-subtitle mb-4">Изготовим качественную кухню с учетом Ваших пожеланий и особенностей помещения. Рассчитаем стоимость за 15 минут.</p>
				<!-- <a href="#" type="button" class="btn btn-lg btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</a> -->
                <a href="#quiz" class="btn btn-lg btn-corporate-color-1">Рассчитать стоимость</a>
			</div>	
		</div>
	</div>
</section>
<!-- /Home section -->


		
<!-- ARCHIVE PRODUCT SECTION -->
<section class="archive-product-section pb-5 bg-white">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="breadcrumbs py-4">
					<nav class="woocommerce-breadcrumb" itemprop="breadcrumb"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/breadcrumbs-icon.svg"></a> / Католог / Кухни</nav>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col header-text mb-5">
				<h2>Каталог проектов для заказа кухни по Вашим размерам</h2>
				<p style="font-family: 'HelveticaNeueCyr-Light';">Выбирайте из нашего каталога или присылайте Ваш проект</p>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
				<div class="row text-start">
					<div class="col-md-2 mb-5 mb-md-0" style="text-transform: uppercase; font-size: 14px;">
						<?php dynamic_sidebar( 'wsidebar-1' ); ?>
						
						<!-- Add general category in dynamic_sidebar -->
						<script>
							// Создаем новый элемент li
							const newListItem = document.createElement('li');
							const fullUrl = location.href;
							if (fullUrl == 'https://xn--62-6kca7ahoms.xn--p1ai/product-category/%D0%BA%D1%83%D1%85%D0%BD%D0%B8/' ) {
								newListItem.className = 'cat-item current-cat';
							} else {
								newListItem.className = 'cat-item';
							}

							// Создаем элемент ссылки
							const newLink = document.createElement('a');
							newLink.href = 'https://мозаика62.рф/product-category/кухни/';
							newLink.textContent = 'Все кухни';

							// Добавляем ссылку в элемент li
							newListItem.appendChild(newLink);

							// Находим элемент ul с классом product-categories
							const productCategoriesList = document.querySelector('#woocommerce_product_categories-2 ul.product-categories');

							// Если список найден, вставляем новый элемент первым в списке
							if (productCategoriesList) {
								productCategoriesList.insertBefore(newListItem, productCategoriesList.firstChild);
							}
						</script>
					</div>
					<div class="col-md-10">
						<div class="row">
							<?php
								if ( woocommerce_product_loop() ) {

									/**
									 * Hook: woocommerce_before_shop_loop.
									 *
									 * @hooked woocommerce_output_all_notices - 10
									 * @hooked woocommerce_result_count - 20
									 * @hooked woocommerce_catalog_ordering - 30
									 */
									//do_action( 'woocommerce_before_shop_loop' );
									
									// Нижее выводятся карточки категорий и подкатегорий
									woocommerce_product_loop_start();
								
									
									if ( wc_get_loop_prop( 'total' ) ) {
										
										
										/* Выводим все товары кроме тех, у которых есть тег Портфолио */
										/* С таким условием вывода неправильно работает пагинация
										global $query_string;
										// добавляем базовые параметры в массив $args
										parse_str( $query_string, $args );
										// добавляем/заменяем параметр post_type в массиве
										$args['tax_query'] = array(           
											array(
												'taxonomy' => 'product_tag',
												'field' => 'slug',
												'terms' => 'portfolio',
												'operator' => 'NOT IN'
											)
										);
										query_posts( $args ); */
										/* End Выводим все товары кроме тех, у которых есть тег Портфолио */
										
										
										while ( have_posts() ) {
											
											the_post();
											
											/**
											 * Hook: woocommerce_shop_loop.
											 */
											
											do_action( 'woocommerce_shop_loop' );
											
											wc_get_template_part( 'content', 'kitchen' );
											
										}
									}

									woocommerce_product_loop_end();

									/**
									 * Hook: woocommerce_after_shop_loop.
									 *
									 * @hooked woocommerce_pagination - 10
									 */
									do_action( 'woocommerce_after_shop_loop' );
								} else {
									/**
									 * Hook: woocommerce_no_products_found.
									 *
									 * @hooked wc_no_products_found - 10
									 */
									do_action( 'woocommerce_no_products_found' );
								}

								/**
								 * Hook: woocommerce_after_main_content.
								 *
								 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
								 */
								do_action( 'woocommerce_after_main_content' );

								/**
								 * Hook: woocommerce_sidebar.
								 *
								 * @hooked woocommerce_get_sidebar - 10
								 */
								//do_action( 'woocommerce_sidebar' );
							?>	
						</div><!-- row -->
					</div><!-- col-md-9 -->
				</div><!-- row -->
			</div>
		</div>
	</div>
</section>
<!-- /ARCHIVE PRODUCT SECTION -->


<!-- ARCHIVE ACTIONS -->
<?php
get_template_part('template-parts/action/action', '', [
    'show_button' => 'true',
    'show_breadcrumbs' => 'false', 
    'actions_count' => '5',
    'bg_color' => 'bg-light',
    'section_title' => 'Наши акции',
    'card_type' => 'modal',
    'filter_category' => 'kitchen'
]);
?>
<!-- /ARCHIVE ACTIONS -->


<!-- Gradient order section -->
<section class="gradient-order-section bg-light" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/gradient-order-section-bg.jpg);">
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


<!-- ABOUT SECTION -->
<section class="about-section bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col text-md-center">
				<h2>О нас</h2>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
			</div>
		</div>
		<!-- Слайдер Bootstrap -->
		<div class="row justify-content-between about_box">
			<div class="col-12 col-lg-6 order-2 order-lg-first text-center">
				
				<div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel">
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
					<!-- Кнопки навигации -->
					<button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Предыдущий</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Следующий</span>
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
<!-- /ABOUT SECTION -->

<!-- /ABOUT SECTION GALLERY -->
<div  id="aboutSectionGalleryWrapper">
	<div id="aboutSectionGallery"  class="carousel slide" data-bs-ride="false" data-bs-interval="false"  style="display: none;  position: fixed;  top: 0;  height: 100%;  width: 100%;">
		<div class="carousel-indicators">
			<button id="indAboutSectionGallery-1" type="button" data-bs-target="#aboutSectionGallery" data-bs-slide-to="0" aria-label="Slide 1"></button>
			<button id="indAboutSectionGallery-2" type="button" data-bs-target="#aboutSectionGallery" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button id="indAboutSectionGallery-3" type="button" data-bs-target="#aboutSectionGallery" data-bs-slide-to="2" aria-label="Slide 3"></button>
			<button id="indAboutSectionGallery-4" type="button" data-bs-target="#aboutSectionGallery" data-bs-slide-to="3" aria-label="Slide 4"></button>
			<button id="indAboutSectionGallery-5" type="button" data-bs-target="#aboutSectionGallery" data-bs-slide-to="4" aria-label="Slide 5"></button>
			<button id="indAboutSectionGallery-6" type="button" data-bs-target="#aboutSectionGallery" data-bs-slide-to="5" aria-label="Slide 6"></button>
			<button id="indAboutSectionGallery-7" type="button" data-bs-target="#aboutSectionGallery" data-bs-slide-to="6" aria-label="Slide 7"></button>
			<button id="indAboutSectionGallery-8" type="button" data-bs-target="#aboutSectionGallery" data-bs-slide-to="7" aria-label="Slide 8"></button>
		</div>
		<div class="carousel-inner h-100">
			<div id="imgAboutSectionGallery-1" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/1.webp" class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"  alt="..."/>
					</div>
				</div>
			</div>
			<div id="imgAboutSectionGallery-2" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/2.webp" class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"  alt="..."/>
					</div>
				</div>
			</div>
			<div id="imgAboutSectionGallery-3" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/3.webp" class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"  alt="..."/>
					</div>
				</div>
			</div>
			<div id="imgAboutSectionGallery-4" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/4.webp" class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"  alt="..."/>
					</div>
				</div>
			</div>
			<div id="imgAboutSectionGallery-5" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/5.webp" class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"  alt="..."/>
					</div>
				</div>
			</div>
			<div id="imgAboutSectionGallery-6" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/6.webp" class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"  alt="..."/>
					</div>
				</div>
			</div>
			<div id="imgAboutSectionGallery-7" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/7.webp" class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"  alt="..."/>
					</div>
				</div>
			</div>
			<div id="imgAboutSectionGallery-8" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/8.webp" class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"  alt="..."/>
					</div>
				</div>
			</div>
		</div>
		<button  class="carousel-control-prev"  type="button"  data-bs-target="#aboutSectionGallery"  data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next"  type="button" data-bs-target="#aboutSectionGallery" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<!-- Кнопка закрытия галереи -->
	<button  type="button"  onClick="aboutSectionGalleryClose();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999" aria-label="Close"></button>
</div>
<!-- /ABOUT SECTION GALLERY -->

<!-- /ABOUT SECTION GALLERY SCRIPT -->
<script>
  /* Gallery opening function */
  function aboutSectionGalleryOn(gal, img) {
		var gallery = gal; // Получаем ID галереи
		var image = img; // Получаем ID картинки
	
		// Открываем обертку галереи
		document.getElementById( "aboutSectionGalleryWrapper" ).style.display = "block";

		// Открываем галерею
		if ( gallery == "aboutSectionGallery" ) { document.getElementById( "aboutSectionGallery" ).style.display = "block"; }
	
		/* Открываем изображения и индикаторы галереи */
		if ( image == "imgAboutSectionGallery-1" ) {
			document.getElementById("imgAboutSectionGallery-1").classList.add("active");
			document.getElementById("indAboutSectionGallery-1").classList.add("active");
		}
		if ( image == "imgAboutSectionGallery-2" ) {
			document.getElementById("imgAboutSectionGallery-2").classList.add("active");
			document.getElementById("indAboutSectionGallery-2").classList.add("active");
		}
		if ( image == "imgAboutSectionGallery-3" ) {
			document.getElementById("imgAboutSectionGallery-3").classList.add("active");
			document.getElementById("indAboutSectionGallery-3").classList.add("active");
		}
		if ( image == "imgAboutSectionGallery-4" ) {
			document.getElementById("imgAboutSectionGallery-4").classList.add("active");
			document.getElementById("indAboutSectionGallery-4").classList.add("active");
		}
		if ( image == "imgAboutSectionGallery-5" ) {
			document.getElementById("imgAboutSectionGallery-5").classList.add("active");
			document.getElementById("indAboutSectionGallery-5").classList.add("active");
		}
		if ( image == "imgAboutSectionGallery-6" ) {
			document.getElementById("imgAboutSectionGallery-6").classList.add("active");
			document.getElementById("indAboutSectionGallery-6").classList.add("active");
		}
		if ( image == "imgAboutSectionGallery-7" ) {
			document.getElementById("imgAboutSectionGallery-7").classList.add("active");
			document.getElementById("indAboutSectionGallery-7").classList.add("active");
		}
		if ( image == "imgAboutSectionGallery-8" ) {
			document.getElementById("imgAboutSectionGallery-8").classList.add("active");
			document.getElementById("indAboutSectionGallery-8").classList.add("active");
		}

	} /* Ending gallery opening function */


	// Кнопка закрытия галереи
	function aboutSectionGalleryClose() {
		// Закрываем обертку галереи
		document.getElementById("aboutSectionGalleryWrapper").style.display = "none";
		
		// Закрываем галерею
		document.getElementById("aboutSectionGallery").style.display = "none";
		
		/* Закрываем тзображения и индикаторы галереи */
		document.getElementById("imgAboutSectionGallery-1").classList.remove("active");
		document.getElementById("indAboutSectionGallery-1").classList.remove("active");
		document.getElementById("imgAboutSectionGallery-2").classList.remove("active");
		document.getElementById("indAboutSectionGallery-2").classList.remove("active");
		document.getElementById("imgAboutSectionGallery-3").classList.remove("active");
		document.getElementById("indAboutSectionGallery-3").classList.remove("active");
		document.getElementById("imgAboutSectionGallery-4").classList.remove("active");
		document.getElementById("indAboutSectionGallery-4").classList.remove("active");
		document.getElementById("imgAboutSectionGallery-5").classList.remove("active");
		document.getElementById("indAboutSectionGallery-5").classList.remove("active");
		document.getElementById("imgAboutSectionGallery-6").classList.remove("active");
		document.getElementById("indAboutSectionGallery-6").classList.remove("active");
		document.getElementById("imgAboutSectionGallery-7").classList.remove("active");
		document.getElementById("indAboutSectionGallery-7").classList.remove("active");
		document.getElementById("imgAboutSectionGallery-8").classList.remove("active");
		document.getElementById("indAboutSectionGallery-8").classList.remove("active");
	}
</script>
<!-- /ABOUT SECTION GALLERY SCRIPT -->


<!-- Advantage section -->
<section class="advantage bg-white py-5">
	<div class="container">
		<div class="row">
			<div class="col align-items-center text-md-center">
				<h2>Наши преимущества</h2>
				<p class="advantages">Почему стоит выбрать салон кухонь «Мозаика»</p>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
				
				<div class="row">
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/measurement-ico.svg" class="img-fluid">
							</div>
							<div class="col-9 col-md-10">
								<h3 class="advantage-title text-start">Замер и дизайн-проект бесплатно</h3>
								<p class="text-start">При заключении договора наш специалист бесплатно сделает замер и разработает дизайн-проект любого предмета мебели.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-advantage-ico.svg" class="img-fluid">
							</div>
							<div class="col-9 col-md-10">
								<h3 class="advantage-title text-start">Высокотехнологичное производство</h3>
								<p class="text-start">Вся наша мебель изготавливаются на современном оборудовании фабрики Cucina, что позволяет гарантировать нам высочайшее качество каждого изделия.</p>
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
								<p class="text-start">Мы даем максимальную гарантию на свою мебель, т.к. уверены в профессионализме своих сотрудников и используемых материалах.</p>
							</div>	
						</div>
					</div>
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/discount-ico.svg" class="img-fluid">
							</div>
							<div class="col-9 col-md-10">
								<h3 class="advantage-title text-start">Скидка +10% при повторном обращении</h3>
								<p class="text-start">Мы изготавливаем любую корпусную мебель, а значит Вы можете заказать у нас кухню, шкаф, прихожую или другую мебель в квартиру в едином стиле по выгодной цене.</p>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Advantage section -->


<?php get_template_part('template-parts/reviews-section/reviews-section', null, array(
    'bg_color' => 'bg-light', 
)); ?>


<!-- Process -->
<section class="advantages bg-white py-5">
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
<section class="advantages bg-light py-5">
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
								<p class="mb-0">Срок производства зависит от материалов и составляет от 20 рабочих дней. Сроки, в обязательном порядке, согласовываются с заказчиком при заключении договора.</p>
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
								<p class="mb-0">Стоимость выезда замерщика составляет 1500 руб. Но если Вы заключаете договор, то замер для Вас обходится бесплатно, а оплаченный Вами выезд вычитается из суммы оплаты.</p>
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
								<p class="mb-0">Наш салон является официальным представителем мебельной фабрики Cucina, которая выполняет заказы на всю страну и ближнее зарубежье, а следовательно имеет большие объемы закупки материалов и производства, что и удешевляет конечную стоимость продукции.</p>
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
<section class="gradient-order-section bg-white" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/sec-bg2.jpg);">
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

<?php get_template_part('template-parts/quiz/kitchen/quiz-kitchen'); ?>


<?php get_footer( '1' ); ?>