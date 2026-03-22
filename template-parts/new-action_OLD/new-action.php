
<?php
/**
 * Template: Секция "Акции от нашего салона"
 * Файл: template-parts/new-action/new-action.php
 * Описание: Отдельная секция для отображения акций салона
 */

$bg_color = $args['bg_color'] ?? 'bg-white';
?>

<!-- Archive portfolio section -->
<section class="archive-portfolio-section-2 py-5 <?php echo esc_attr($bg_color); ?>">
	<div class="container">
		<div class="row">
			<div class="col text-md-center">
				<h2>Акции от нашего салона</h2>
				<img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">	
			</div>
		</div>
		<div class="row text-start mb-5">
			<div class="col-md-4">
				<a href="#" class="portfolio-item-link" data-bs-toggle="modal" data-bs-target="#orderModal">
					<img src="<?php echo get_template_directory_uri(); ?>/img/actions/new-action-1.jpg" class="img-fluid rounded mb-3" alt="">
				</a>
			</div>
			<div class="col-md-4">
				<a href="#" class="portfolio-item-link" data-bs-toggle="modal" data-bs-target="#orderModal">
					<img src="<?php echo get_template_directory_uri(); ?>/img/actions/new-action-2.jpg" class="img-fluid rounded mb-3" alt="">
				</a>
			</div>
			<div class="col-md-4">
				<a href="#" class="portfolio-item-link" data-bs-toggle="modal" data-bs-target="#orderModal">
					<img src="<?php echo get_template_directory_uri(); ?>/img/actions/new-action-3.jpg" class="img-fluid rounded mb-3" alt="">
				</a>
			</div>
		</div>

		<div class="row text-md-center">
			<div class="col">
				<a href="/акции" class="btn btn-lg btn-corporate-color-1">Смотреть все акции</a>
			</div>
		</div>
	</div>
</section>