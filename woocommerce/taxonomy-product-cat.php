<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product-cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     4.7.0
 */

if (!defined('ABSPATH')) {
    exit;
}

$product_cat = get_queried_object();

// Проверяем по названию категории
if ($product_cat->name == 'Кухни') {
    include get_stylesheet_directory() . '/woocommerce/archive-kitchen.php';
} elseif ($product_cat->name == 'Шкафы') {
    include get_stylesheet_directory() . '/woocommerce/archive-closets.php';
} else {
    // Для подкатегорий проверяем родителя
    if ($product_cat->parent != 0) {
        $parent = get_term($product_cat->parent, 'product_cat');
        if ($parent->name == 'Кухни') {
            include get_stylesheet_directory() . '/woocommerce/archive-kitchen.php';
        } elseif ($parent->name == 'Шкафы') {
            include get_stylesheet_directory() . '/woocommerce/archive-closets.php';
        } else {
            wc_get_template('archive-product.php');
        }
    } else {
        wc_get_template('archive-product.php');
    }
}
?>