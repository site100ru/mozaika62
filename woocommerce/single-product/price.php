<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>


<?php
	
	/* Добавляем кнопку в продукт в зависимости от цены
	$price = get_post_meta( get_the_ID(), '_regular_price', true);
	
	if ( $price == null ) { ?>
		<button class="btn btn-lg btn-orange mt-3 text-light" data-bs-toggle="modal" data-bs-target="#orderModal">Узнать стоимость</button>
	<?php } else { ?>
		<p class="mb-0 <?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo 'от '.$product->get_price_html(); ?></p>
		<button class="btn btn-lg btn-orange mt-4 text-light" data-bs-toggle="modal" data-bs-target="#orderModal">Оставить заявку</button>
	<?php } */
	
	
	/* Добавляем кнопку в продукт в зависимости от категории */
	//global $post;
	
	/*
	$terms = get_the_terms( $post->ID, 'product_cat' );
	$nterms = get_the_terms( $post->ID, 'product_tag'  );
	foreach ($terms  as $term  ) {
		$product_cat_id = $term->term_id;
		$product_cat_name = $term->name;
		break;
	}
	
	if ( $product_cat_name == 'Кухни' OR $product_cat_name == 'Угловые готовые кухни' OR $product_cat_name == 'П-образные готовые кухни' OR $product_cat_name == 'Готовые шкафы' ) { ?>
		
		<p class="mb-0 <?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>">
			<?php echo $product->get_price_html(); ?>
		</p>
		
		<button class="btn btn-lg btn-corporate-color-1 mt-4 text-light" data-bs-toggle="modal" data-bs-target="#calculatePriceModal">Рассчитать стоимость</button>
	<?php } else { ?>
		<!--button class="btn btn-lg btn-corporate-color-1 mt-3 text-light" data-bs-toggle="modal" data-bs-target="#orderModal">Узнать стоимость</button-->
		<button type="button" class="btn btn-lg btn-corporate-color-1 mt-3 text-light" data-bs-toggle="modal" data-bs-target="#measurerModal">Вызвать замерщика</button>
	<?php }
	*/
     
	
	
?>
