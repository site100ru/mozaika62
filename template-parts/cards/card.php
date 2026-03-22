<?php
/**
 * Card Project
 * 
 * Универсальная карточка для проектов/услуг/категорий
 * 
 * Параметры:
 * $args['link']                - URL ссылки (если пустой - карточка без ссылки)
 * $args['image']               - URL основного изображения
 * $args['image_hover']         - URL изображения при наведении (опционально, для типа 'hover-image')
 * $args['title']               - заголовок карточки
 * $args['show_title']          - показывать заголовок (bool), по умолчанию true. Если false - заголовок скрыт через CSS
 * $args['card_type']           - тип карточки: 'approximation' (увеличение), 'zoom-card' (зум), 'hover-image' (смена изображения), 'magnifier' (с лупой), по умолчанию 'approximation'
 * $args['default_image']       - URL изображения по умолчанию (если image не указан)
 * 
 * Пример использования:
 * // Дефолтная карточка 
 * <?php get_template_part('template-parts/cards/card', null, array(
 *     'link' => 'https://example.com',
 *     'image' => 'https://example.com/image.jpg',
 *     'title' => 'Название проекта',
 *     'card_type' => 'approximation'
 * )); ?>
 * 
 * // Карточка с увеличением
 * <?php get_template_part('template-parts/cards/card', null, array(
 *     'image' => 'https://example.com/image.jpg',
 *     'title' => 'Название',
 *     'card_type' => 'zoom-card'
 * )); ?>
 * 
 * // Карточка со сменой изображения при наведении
 * <?php get_template_part('template-parts/cards/card', null, array(
 *     'link' => 'https://example.com',
 *     'image' => 'https://example.com/image1.jpg',
 *     'image_hover' => 'https://example.com/image2.jpg',
 *     'title' => 'Название',
 *     'card_type' => 'hover-image'
 * )); ?>
 * 
 * // Карточка с лупой
 * <?php get_template_part('template-parts/cards/card', null, array(
 *     'image' => 'https://example.com/image.jpg',
 *     'title' => 'Название',
 *     'card_type' => 'magnifier'
 * )); ?>
 */

// Получаем параметры
$link = isset($args['link']) ? $args['link'] : '';
$image = isset($args['image']) ? $args['image'] : '';
$image_hover = isset($args['image_hover']) ? $args['image_hover'] : '';
$title = isset($args['title']) ? $args['title'] : '';
$show_title = isset($args['show_title']) ? $args['show_title'] : true;
$card_type = isset($args['card_type']) ? $args['card_type'] : 'approximation';
$default_image = isset($args['default_image']) ? $args['default_image'] : get_template_directory_uri() . '/img/default-placeholder.webp';

// Если изображение не указано, используем дефолтное
if (empty($image)) {
    $image = $default_image;
}

// Определяем класс карточки
$card_class = 'services';
if ($card_type === 'zoom-card') {
    $card_class .= ' zoom-card';
} elseif ($card_type === 'hover-image') {
    $card_class .= ' approximation hover-image-card';
} elseif ($card_type === 'magnifier') {
    $card_class .= ' approximation';
} else {
    $card_class .= ' project-container-2 approximation';
}

// Открываем ссылку если она есть
if (!empty($link)) {
    echo '<a href="' . esc_url($link) . '">';
}
?>

<div class="default-card <?php echo esc_attr($card_class); ?>">
    <?php if ($card_type === 'hover-image' && !empty($image_hover)) : ?>
        <!-- Тип hover-image: Две картинки со сменой при наведении -->
        <div class="image-wrapper">
            <img src="<?php echo esc_url($image); ?>" class="img-fluid image-default" alt="<?php echo esc_attr($title); ?>">
            <img src="<?php echo esc_url($image_hover); ?>" class="img-fluid image-hover" alt="<?php echo esc_attr($title); ?>">
        </div>
    <?php else : ?>
        <!-- Типы approximation / zoom-card / magnifier: Одна картинка -->
        <img src="<?php echo esc_url($image); ?>" class="img-fluid" alt="<?php echo esc_attr($title); ?>">
        
        <?php if ($card_type === 'magnifier') : ?>
            <!-- Тип magnifier: Добавляем лупу -->
            <div class="magnifier"></div>
        <?php endif; ?>
    <?php endif; ?>
    
    <?php if (!empty($title)) : ?>
        <h3 <?php if (!$show_title) echo 'style="display: none;"'; ?>><?php echo esc_html($title); ?></h3>
    <?php endif; ?>
</div>

<?php
// Закрываем ссылку если она есть
if (!empty($link)) {
    echo '</a>';
}
?>