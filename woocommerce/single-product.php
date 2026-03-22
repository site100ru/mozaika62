<?php
	
	/**
	 * The Template for displaying all single products
	 *
	 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
	 *
	 * HOWEVER, on occasion WooCommerce will need to update template files and you
	 * (the theme developer) will need to copy the new files to your theme to
	 * maintain compatibility. We try to do this as little as possible, but it does
	 * happen. When this occurs the version of the template file will be bumped and
	 * the readme will list any important changes.
	 *
	 * @see         https://woocommerce.com/document/template-structure/
	 * @package     WooCommerce\Templates
	 * @version     1.6.4
	 */

	
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

	
	get_header();


	/**
	 * woocommerce_before_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 */
	do_action( 'woocommerce_before_main_content' );
	
?>
  	
		
		
<!-- Header 2 -->
<header class="header-2">
	<!-- Top menu header -->
	<nav class="header-nav-top navbar navbar-expand-lg navbar-light bg-light d-none d-xl-block py-0" style="border-bottom: 1px solid #d7d7d7">
		<div class="container">
			<div class="collapse navbar-collapse" id="navbarSupportedContent1">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
					<li class="nav-item me-3">
						<a class="nav-link text-dark" href="#">
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
					<li class="nav-item me-3">
						<a class="nav-link text-dark" href="#">
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
					<li class="nav-item me-3">
						<a href="#" class="nav-link text-dark" data-bs-toggle="modal" data-bs-target="#callbackModal">
							<div style="display: flex;">
								<div class="nav-li-float-left">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-ico.svg">
								</div>
								<div class="nav-li-float-right" >
									Обратный звонок
								</div>
								<div style="clear: both;"></div>
							</div>
						</a>
					</li>
					<li class="nav-item me-4">
						<a class="nav-link text-dark" href="#" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">
							<div style="display: flex;">      
								<div class="nav-li-float-left">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/calculator-ico.svg">
								</div>
								<div class="nav-li-float-right" >
									Рассчитать стоимость
								</div>
								<div style="clear: both;"></div>
							</div>
						</a>
					</li>
					<li class="nav-item me-4">
						<a class="top-menu-tel nav-link text-dark" href="tel:89511014610">
							<div style="display: flex;">
								<div class="nav-li-float-left">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/mobile-phone-ico.svg">
								</div>
								<div class="nav-li-float-right" >
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
	<!-- /Top menu header  -->


	<!-- Menu header -->
	<nav id="header-2-bottom" class="header-nav-bottom navbar navbar-expand-lg navbar-light bg-white shadow py-2 py-lg-0">
		<div class="container">
            <a class="navbar-brand" href="/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo-dark.svg" class="custom-logo" alt="Логотип в шапке" decoding="async" />
            </a>
			
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="main-menu">
				<?php
					wp_nav_menu(array(
						'theme_location' => 'main-menu',
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
	<!-- /Menu header -->
</header><!-- /header-2 -->

			
				
<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>

	<?php wc_get_template_part( 'content', 'single-product' ); ?>

<?php endwhile; // end of the loop. ?>
					
					

<!-- Gallery wrapper -->
<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">

	<div id="gallery-2" class="carousel slide" data-bs-ride="false" data-bs-interval="false" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
				
		<!--div class="carousel-indicators">
					</div-->
		
		<div class="carousel-inner h-100" style="width: 100%;">
			<div class="carousel-item carousel-item-2 h-100 active">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card1.jpg" class="img-fluid" loading="lazy" alt="...">
					</div>
				</div>
			</div>
			<div class="carousel-item carousel-item-2 h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card2.jpg" class="img-fluid" loading="lazy" alt="...">
					</div>
				</div>
			</div>
			<div class="carousel-item carousel-item-2 h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card3.jpg" class="img-fluid" loading="lazy" alt="...">
					</div>
				</div>
			</div>
			<div class="carousel-item carousel-item-2 h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card4.jpg" class="img-fluid" loading="lazy" alt="...">
					</div>
				</div>
			</div>
			<div class="carousel-item carousel-item-2 h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card5.jpg" class="img-fluid" loading="lazy" alt="...">
					</div>
				</div>
			</div>
			<div class="carousel-item carousel-item-2 h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card6.jpg" class="img-fluid" loading="lazy" alt="...">
					</div>
				</div>
			</div>
			<div class="carousel-item carousel-item-2 h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card7.jpg" class="img-fluid" loading="lazy" alt="...">
					</div>
				</div>
			</div>
			<div class="carousel-item carousel-item-2 h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card8.jpg" class="img-fluid" loading="lazy" alt="...">
					</div>
				</div>
			</div>
			<div class="carousel-item carousel-item-2 h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card9.jpg" class="img-fluid" loading="lazy" alt="...">
					</div>
				</div>
			</div>
			<div class="carousel-item carousel-item-2 h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio-card10.jpg" class="img-fluid" loading="lazy" alt="...">
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
	function galleryOn(gal) {
		var gallery = gal; // Получаем ID галереи
		// Открываем обертку галереи
		document.getElementById('galleryWrapper').style.display = 'block';
		
		/* Открываем галерею */
		document.getElementById(gallery).style.display = "block";
		
	}

	/* Кнопка закрытия галереи */
	function closeGallery() {
		// Закрываем обертку галереи
		document.getElementById('galleryWrapper').style.display = 'none';
		document.getElementById("gallery-2").style.display = "none";
	}
</script>



<!-- Advantage section -->
<section class="advantage bg-light py-5">
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


<?php
	/**
	 * woocommerce_after_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	//do_action( 'woocommerce_after_main_content' );
?>


<?php
	/**
	 * woocommerce_sidebar hook.
	 *
	 * @hooked woocommerce_get_sidebar - 10
	 */
	//do_action( 'woocommerce_sidebar' );
?>

<?php get_footer( '1' ); ?>