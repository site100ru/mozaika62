<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);
?>

<div id="carousel-<?php the_ID(); ?>" class="carousel slide" data-bs-ride="carousel"  data-bs-interval="false">
	<div class="carousel-inner rounded">
		<?php
			$attachment_ids = $product->get_gallery_image_ids();
			$count = false;
			foreach ( $attachment_ids as $attachment_id ) {
		?>
			<div class="carousel-item<?php if ( $count == false ) { echo ' active'; $count = true; } ?>" data-bs-interval="9999">
				<a href="#" onClick="galleryOn('gallery-<?php the_ID(); ?>');">
					<div class="single-product-img approximation">
						<img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" class="d-block w-100 h-100" loading="lazy" alt="...">
						<div class="magnifier"></div>
					</div>
				</a>
			</div>
		<?php } ?>
	</div>
	<?php 
		$count = 0;
		foreach ( $attachment_ids as $attachment_id ) {
			$count = $count + 1;
		}
		if ( $count > 1 ) { ?>
			<button class="carousel-control-prev" type="button" data-bs-target="#carousel-<?php the_ID(); ?>"  data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carousel-<?php the_ID(); ?>"  data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		<?php }
	?>
</div>


<!--div id="carousel-<?php the_ID(); ?>" class="carousel slide single_img_slide" data-bs-ride="false"  data-bs-interval="false">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<a href="#" onClick="galleryOn('gallery-2');">
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-card1.jpg" class="d-block w-100" loading="lazy" alt="...">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/magnifying-glass.svg" alt="Лупа" class="magnifying-glass">
				</div>
			</a>
		</div>
		<div class="carousel-item">
			<a href="#" onClick="galleryOn('gallery-2');">
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-card5.jpg" class="d-block w-100" loading="lazy" alt="...">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/magnifying-glass.svg" alt="Лупа" class="magnifying-glass">
				</div>
			</a>
		</div>
		<div class="carousel-item">
			<a href="#" onClick="galleryOn('gallery-2');">
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-card6.jpg" class="d-block w-100" loading="lazy" alt="...">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/magnifying-glass.svg" alt="Лупа" class="magnifying-glass">
				</div>
			</a>
		</div>
		<div class="carousel-item">
			<a href="#" onClick="galleryOn('gallery-2');">
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-card7.jpg" class="d-block w-100" loading="lazy" alt="...">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/magnifying-glass.svg" alt="Лупа" class="magnifying-glass">
				</div>
			</a>
		</div>
		<div class="carousel-item">
			<a href="#" onClick="galleryOn('gallery-2');">
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-card8.jpg" class="d-block w-100" loading="lazy" alt="...">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/magnifying-glass.svg" alt="Лупа" class="magnifying-glass">
				</div>
			</a>
		</div>
		<div class="carousel-item">
			<a href="#" onClick="galleryOn('gallery-2');">
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-card9.jpg" class="d-block w-100" loading="lazy" alt="...">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/magnifying-glass.svg" alt="Лупа" class="magnifying-glass">
				</div>
			</a>
		</div>
		<div class="carousel-item">
			<a href="#" onClick="galleryOn('gallery-2');">
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-card10.jpg" class="d-block w-100" loading="lazy" alt="...">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/magnifying-glass.svg" alt="Лупа" class="magnifying-glass">
				</div>
			</a>
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carousel-2"  data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carousel-2"  data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div-->