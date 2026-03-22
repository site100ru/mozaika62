<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>


<section class="shkafy-cupe-section site-section py-5 bg-light">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php
				$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

				if ( $heading ) :
					?>
					<!--h2><?php echo esc_html( $heading ); ?></h2-->
					<h2 class="text-uppercase text-center text-corporation-orange fw-bold mb-5">Другие варианты варианты</h2>
				<?php endif; ?>
			</div>
		</div>
		
		
		<?php woocommerce_product_loop_start(); ?>
			<?php foreach ( $related_products as $related_product ) : ?>
				<?php
					$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found
				?>
				<?php
					//wc_get_template_part( 'content', 'product' );
				?>
				<div class="col-md-4 mb-5">
					<div class="approximation shadow rounded">
						<?php
						/**
						 * Hook: woocommerce_before_shop_loop_item.
						 *
						 * @hooked woocommerce_template_loop_product_link_open - 10
						 */
						do_action( 'woocommerce_before_shop_loop_item' );

						/**
						 * Hook: woocommerce_before_shop_loop_item_title.
						 *
						 * @hooked woocommerce_show_product_loop_sale_flash - 10
						 * @hooked woocommerce_template_loop_product_thumbnail - 10
						 */
						do_action( 'woocommerce_before_shop_loop_item_title' );

						/**
						 * Hook: woocommerce_shop_loop_item_title.
						 *
						 * @hooked woocommerce_template_loop_product_title - 10
						 */ ?>
						<div class="card-wrapper">
							<h2 class="woocommerce-loop-product__price">
								<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
							</h2>
							<h2 class="woocommerce-loop-product__title"><?php do_action( 'woocommerce_shop_loop_item_title' ); ?></h2>
						</div>
						
						<?php
						/**
						 * Hook: woocommerce_after_shop_loop_item_title.
						 *
						 * @hooked woocommerce_template_loop_rating - 5
						 * @hooked woocommerce_template_loop_price - 10
						 */
						//do_action( 'woocommerce_after_shop_loop_item_title' );

						/**
						 * Hook: woocommerce_after_shop_loop_item.
						 *
						 * @hooked woocommerce_template_loop_product_link_close - 5
						 * @hooked woocommerce_template_loop_add_to_cart - 10
						 */
						do_action( 'woocommerce_after_shop_loop_item' );
						?>
					</div>
				</div>
			<?php endforeach; ?>
		<?php woocommerce_product_loop_end(); ?>
		
		
		<div class="row">
			<div class="col text-center">
				<?php
					// Получаем название термина чтобы потом можно былой перейти к списку всех товаров принадлежащих этому термину
					global $post;
					$post_id = $post->ID;
					$terms = get_the_terms( $post->ID, 'product_cat' );
					if( $terms ){
						$term = array_shift( $terms );
						// теперь можно можно вывести название термина
						//echo $term_name = $term->name;
						//echo $term_id = $term->term_id;
						$term_id = $term->term_id;
					}
				?>
				<a href="<?php echo get_term_link( $term_id ); ?>" class="btn btn-lg btn-corporation-orange px-5" type="submit">Смотреть все варианты</a>
			</div>
		</div>
	</div>
</section>
	
	<?php
endif;

wp_reset_postdata(); ?>