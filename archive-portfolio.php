<?php
	
	/**
	 * Template Name: Архив портфолио
	 * Template Post Type: page
	 */
	
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
				<h1 class="home-title" style="color: #fff;">Наши работы</h1>
			</div>	
		</div>
	</div>
</section>
<!-- /Home section -->



<!-- Portfolio -->
<section class="archive-portfolio-section-2 pt-4 bg-white" style="padding-bottom: 145px;">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="breadcrumbs">
					<nav class="woocommerce-breadcrumb" itemprop="breadcrumb"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/breadcrumbs-icon.svg"></a> / <a href="#">Наши работы</a></nav>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="row">
					<div class="col text-center">
						<h2>Наши работы</h2>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
					</div>
				</div>
				<div class="row">
					<div class="col text-center mb-4 mb-md-5">
						<div class="nav-scroller mb-0" style="text-transform: uppercase; font-family: 'HelveticaNeueCyr-Light'; font-weight: bold;">
							<ul class="nav justify-content-md-center d-flex m-auto">
								<li class="nav-item">
									<a class="nav-link active" href="https://мозаика62.рф/наши-работы/">Все</a>
								</li>
								<?php
									$args = [
										'taxonomy' => [ 'portfolio-cat' ],
										'orderby'  		=> 'slug',
										'order'    		=> 'ASC',
									];
									
									$terms = get_terms( $args );
									
									foreach( $terms as $term ) { ?>
										<li class="nav-item"><a class="nav-link" href="<?php echo get_term_link( $term->term_id ); ?>"><?php echo $term->name; ?></a></li>
									<?php }
								?>
							</ul>
						</div>
						<div class="d-md-none text-center mb-4">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/left-right-finger.svg" style="opacity: 1; max-width: 25px;">
						</div>
					</div>
				</div>
				<div class="row">
					<?php	
						$args = [
							'post_type'	=> 'portfolio',
							'numberposts' 	 => 999,
							'posts_per_page' => 999
						];
						
						$query = new WP_Query( $args );
						$count = 1;
						while( $query->have_posts() ) : $query->the_post(); ?>
							<div class="col-md-6">
								<div id="carouselExampleIndicators<?php echo $post->ID; ?>" class="carousel slide mb-4" data-bs-ride="carousel" data-bs-interval="999999999">
									<div class="carousel-indicators" style="bottom: 5%;">
										<?php
											$count2 = 0;
											for ( $i=1; $i<=9; $i++ ) {
												if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
													<button type="button" data-bs-target="#carouselExampleIndicators<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $i-1; ?>" <?php if ( $i == 1 ) echo ' class="active"'; ?> aria-current="true" aria-label="Slide <?php echo $i; ?>"></button>
												<?php $count2 = $count2 + 1; }
											}
										?>
									</div>
									<div class="carousel-inner rounded">
										<?php
											$count2 = 0;
											for ( $i=1; $i<=9; $i++ ) {
												if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
													<div class="carousel-item <?php if ( $i == 1 ) echo ' active'; ?>" data-bs-interval="999999999">
														<a onClick="galleryOn('gallery-<?php echo $post->ID; ?>','img-<?php echo $post->ID; ?>-<?php echo $count2; ?>');">	
															<div class="single-product-img approximation">
																<img src="<?php echo get_post_meta($post->ID, '_img-'.$i )[0]; ?>" class="shadow rounded" alt="..." loading="lazy">
																<div class="magnifier"></div>
															</div>
														</a>
													</div>
												<?php $count2 = $count2 + 1; }
											}
										?>	
									</div>
									<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators<?php echo $post->ID; ?>"  data-bs-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Previous</span>
									</button>
									<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators<?php echo $post->ID; ?>"  data-bs-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Next</span>
									</button>
								</div>
							</div>
						
						<?php $count = $count + 1; endwhile;

						wp_reset_postdata();
						
					?>
				</div>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
</section>
<!-- /Portfolio -->

<!-- Gallery wrapper-->
<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">
	
	
	<?php
		// параметры по умолчанию
		$posts = get_posts( array(
			'numberposts' => 999,
			'orderby'     => 'date',
			'order'       => 'DESC',
			'post_type'   => 'portfolio'
		) );
		
		foreach( $posts as $post ) { setup_postdata($post); ?>

			<div id="gallery-<?php echo $post->ID; ?>" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
				<div class="carousel-indicators">
					<?php
						
						/*
						$images = get_post_gallery_images();
						$count2 = 0;
						foreach ( $images as $image ) {
							
							
							if ( $count2 == 0 ) { ?>
								
								<button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>" aria-label="Slide 3"></button>
								
							<?php $count2 = $count2 + 1; } else { ?>
								
								<button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>" aria-label="Slide 3"></button>
								
							<?php $count2 = $count2 + 1; }
						}*/
						
						$count3 = 0;
						for ( $i=1; $i<=9; $i++ ) {
							if ( get_post_meta($post->ID, '_img-'.$i ) ) {
								if ( $count3 == 0 ) { ?>
									
									<button id="ind-<?php echo $post->ID; ?>-<?php echo $count3; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count3; ?>" aria-label="Slide 3"></button>
									
								<?php $count3 = $count3 + 1; } else { ?>
									
									<button id="ind-<?php echo $post->ID; ?>-<?php echo $count3; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count3; ?>" aria-label="Slide 3"></button>
									
								<?php $count3 = $count3 + 1; }
							}
						}
					?>
				</div>
				<div class="carousel-inner h-100">
					<?php
						
						/*
						$images = get_post_gallery_images();
						$count2 = 0;
						foreach ( $images as $image ) { ?>
							<div id="img-<?php echo $post->ID; ?>-<?php echo $count2; ?>" class="carousel-item h-100">
								<div class="row align-items-center h-100">
									<div class="col text-center">
										<img src="<?php echo $image; ?>" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
									</div>
								</div>
							</div>
							
						<?php  $count2 = $count2 + 1; } */
						
						
						$count4 = 0;
						for ( $i=1; $i<=9; $i++ ) {
							if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
								<div id="img-<?php echo $post->ID; ?>-<?php echo $count4; ?>" class="carousel-item h-100 <?php // if ( $i == 1 ) echo ' active'; ?>" data-bs-interval="999999999">
									<div class="row align-items-center h-100">
										<div class="col text-center">
											<img src="<?php echo get_post_meta($post->ID, '_img-'.$i )[0]; ?>" class="img-fluid" style="max-width: 90vw; max-height: 90vh;" alt="...">
										</div>
									</div>
								</div>
							<?php $count4 = $count4 + 1; }
						}
				
					?>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		<?php } wp_reset_postdata();
	?>

	<!-- Кнопка закрытия галереи -->
	<button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
</div>


<script>
	/* Функция открытия галереи */
	function galleryOn(gal, img) {
		var gallery = gal; // Получаем ID галереи
		var image = img; // Получаем ID картинки
		// Открываем обертку галереи
		document.getElementById('galleryWrapper').style.display = 'block';
		
		// Проверяем какие данные передаются для открытия галереи и картинки
		//alert(gallery+' '+image); 
		
		
		<?php // Открываем галерею
			$posts = get_posts( array(
				'numberposts' => 999,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'post_type'   => 'portfolio'
			) );
			
			foreach( $posts as $post ) { setup_postdata($post);
				
				echo 'if ( gallery == "gallery-'.$post->ID.'" ) { document.getElementById("gallery-'.$post->ID.'").style.display = "block"; }';

			} wp_reset_postdata();
		?>
		
		
		<?php // Открываем изображения
			$posts = get_posts( array(
				'numberposts' => 999,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'post_type'   => 'portfolio'
			) );
			
			foreach( $posts as $post ) {
				setup_postdata( $post );
				$count5 = 0;
				for ( $i=1; $i<=9; $i++ ) {
					echo 'if ( image == "img-'.$post->ID.'-'.$count5.'" ) { document.getElementById("img-'.$post->ID.'-'.$count5.'").classList.add("active"); document.getElementById("ind-'.$post->ID.'-'.$count5.'").classList.add("active"); } ';
					$count5 = $count5 + 1;
				}
			} wp_reset_postdata();
		?>
	}
	

	// Кнопка закрытия галереи
	function closeGallery() {
		// Закрываем обертку галереи
		document.getElementById('galleryWrapper').style.display = 'none';
		
		<?php // Открываем галерею
			$posts = get_posts( array(
				'numberposts' => 999,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'post_type'   => 'portfolio'
			) );
			
			foreach( $posts as $post ) { setup_postdata($post);
				
				echo 'document.getElementById("gallery-'.$post->ID.'").style.display = "none";';

			} wp_reset_postdata();
		?>
		
		<?php // Закрываем изображения
		$posts = get_posts( array(
			'numberposts' => 999,
			'orderby'     => 'date',
			'order'       => 'DESC',
			'post_type'   => 'portfolio'
		) );
		
		/*
		foreach( $posts as $post ) { setup_postdata($post);
			$images = get_post_gallery_images();
			$count2 = 0;
			foreach ( $images as $image ) {

				echo 'document.getElementById("img-'.$post->ID.'-'.$count2.'").classList.remove("active"); document.getElementById("ind-'.$post->ID.'-'.$count2.'").classList.remove("active");';
				
				$count2 = $count2 + 1;
			}
		} wp_reset_postdata(); */
		
		
		foreach( $posts as $post ) {
			setup_postdata( $post );
			$count6 = 0;
			for ( $i=1; $i<=9; $i++ ) {
				echo 'document.getElementById("img-'.$post->ID.'-'.$count6.'").classList.remove("active"); document.getElementById("ind-'.$post->ID.'-'.$count6.'").classList.remove("active");';
				
				$count6 = $count6 + 1;
			}
		} wp_reset_postdata(); ?>
		
	}
</script>
		
		
		
<?php include 'footer-1.php'; ?>