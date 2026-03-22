<?php
	
	/**
	 * Template Name: Главная
	 * Template Post Type: page
	 */
	
	include 'header.php';
	
?>


<?php

// ===== ДЛЯ ГЛАВНОЙ СТРАНИЦЫ =====
// Один блок акций - оптимальный вариант
get_template_part('template-parts/action/action', '', [
    'show_button' => 'true',
    'show_breadcrumbs' => 'false', 
    'actions_count' => '5',
    'bg_color' => 'bg-light',
    'section_title' => 'Наши акции',
    'card_type' => 'modal',
    'filter_category' => 'home'
]);

// // ===== ДЛЯ СТРАНИЦЫ КАТЕГОРИИ (например, кухни) =====
// get_template_part('template-parts/action/action', '', [
//     'show_button' => 'true',
//     'show_breadcrumbs' => 'false',
//     'actions_count' => '4',
//     'bg_color' => 'bg-white',
//     'section_title' => 'Акции для кухонь',
//     'card_type' => 'simple', // простые карточки без модалок
//     'filter_category' => 'kitchen'
// ]);

// // ===== ДЛЯ СТРАНИЦЫ АКЦИЙ =====
// get_template_part('template-parts/action/action', '', [
//     'show_button' => 'false',
//     'show_breadcrumbs' => 'true',
//     'actions_count' => 'all',
//     'bg_color' => 'bg-white',
//     'section_title' => 'Все наши акции',
//     'additional_classes' => 'actions-archive-page',
//     'card_type' => 'simple'
// ]);

// // ===== ЕСЛИ НУЖНЫ ДВА БЛОКА С МОДАЛЬНЫМИ ОКНАМИ =====
// // Блок 1 - основные акции
// get_template_part('template-parts/action/action', '', [
//     'show_button' => 'true',
//     'show_breadcrumbs' => 'false',
//     'actions_count' => '3',
//     'bg_color' => 'bg-light',
//     'section_title' => 'Горячие предложения',
//     'card_type' => 'modal'
// ]);

// // Блок 2 - акции для кухонь  
// get_template_part('template-parts/action/action', '', [
//     'show_button' => 'false',
//     'show_breadcrumbs' => 'false',
//     'actions_count' => '2',
//     'bg_color' => 'bg-white',
//     'section_title' => 'Специально для кухонь',
//     'card_type' => 'modal',
//     'filter_category' => 'kitchen'
// ]);

// // ===== В САЙДБАРЕ =====
// get_template_part('template-parts/action/action', '', [
//     'show_button' => 'true',
//     'show_breadcrumbs' => 'false',
//     'actions_count' => '2',
//     'bg_color' => '',
//     'section_title' => 'Не пропустите',
//     'card_type' => 'modal',
//     'additional_classes' => 'sidebar-actions'
// ]);

// // ===== ВАРИАНТЫ ФИЛЬТРАЦИИ =====

// // Только для спален
// get_template_part('template-parts/action/action', '', [
//     'actions_count' => '3',
//     'card_type' => 'simple',
//     'section_title' => 'Акции для спальни',
//     'filter_category' => 'bedroom'
// ]);

// // Для нескольких категорий
// get_template_part('template-parts/action/action', '', [
//     'actions_count' => '4',
//     'card_type' => 'simple',
//     'section_title' => 'Мебель для дома',
//     'filter_category' => 'kitchen, bedroom, living'
// ]);
?>

<?php include 'footer-1.php'; ?>
