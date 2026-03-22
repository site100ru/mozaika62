<?php

/**
 * Section Portfolio Tabs
 * 
 * Выводит портфолио с табами по категориям
 * 
 * Параметры:
 * $args['section_title']       - заголовок секции, по умолчанию 'Последние выполненные работы'
 * $args['section_description'] - описание секции (текст под заголовком), по умолчанию пусто
 * $args['background_color']    - цвет фона (например: 'bg-white', 'bg-light'), по умолчанию 'bg-white'
 * $args['posts_count']         - количество работ на странице, по умолчанию 6
 * $args['card_type']           - тип карточки: 'approximation', 'zoom-card', 'hover-image', 'magnifier', по умолчанию 'approximation'
 * $args['show_button']         - показывать кнопку "Смотреть еще" (bool), по умолчанию true
 * $args['button_text']         - текст кнопки "Смотреть еще", по умолчанию 'Смотреть еще'
 * $args['show_breadcrumbs']    - показывать хлебные крошки (bool), по умолчанию false
 * $args['breadcrumbs_items']   - массив элементов хлебных крошек (см. breadcrumbs.php)
 * 
 * Пример использования:
 * <?php get_template_part('template-parts/section-portfolio-tabs/section-portfolio-tabs', null, array(
 *     'posts_count' => 6,
 *     'card_type' => 'approximation',
 *     'background_color' => 'bg-white',
 *     'section_title' => 'Наши работы'
 * )); ?>
 * 
 * // С описанием и хлебными крошками
 * <?php get_template_part('template-parts/section-portfolio-tabs/section-portfolio-tabs', null, array(
 *     'section_title' => 'Портфолио работ',
 *     'section_description' => 'Представляем наши лучшие проекты',
 *     'show_breadcrumbs' => true,
 *     'breadcrumbs_items' => [
 *         ['text' => 'Портфолио']
 *     ],
 *     'posts_count' => 9,
 *     'card_type' => 'zoom-card'
 * )); ?>
 */

// Получаем параметры
$category = isset($args['category']) ? $args['category'] : 'all';
$section_title = isset($args['section_title']) ? $args['section_title'] : 'Последние выполненные работы';
$section_description = isset($args['section_description']) ? $args['section_description'] : '';
$background_color = isset($args['background_color']) ? $args['background_color'] : 'bg-white';
$posts_count = isset($args['posts_count']) ? $args['posts_count'] : 6;
$card_type = isset($args['card_type']) ? $args['card_type'] : 'approximation';
$show_button = isset($args['show_button']) ? $args['show_button'] : true;
$button_text = isset($args['button_text']) ? $args['button_text'] : 'Смотреть еще';
$show_card_title = isset($args['show_card_title']) ? $args['show_card_title'] : true;

// Генерируем уникальный ID для этого экземпляра блока
$unique_id = 'portfolio-tabs-' . uniqid();

// Проверяем, есть ли вообще работы в портфолио
$check_query = new WP_Query([
    'post_type' => 'portfolio',
    'posts_per_page' => 1,
]);

// Если нет работ - ничего не выводим
if (!$check_query->have_posts()) {
    wp_reset_postdata();
    return;
}
wp_reset_postdata();

// Получаем все категории портфолио (только непустые)
$portfolio_categories = get_terms(array(
    'taxonomy' => 'portfolio-cat',
    'hide_empty' => true,
    'orderby' => 'name',
    'order' => 'ASC'
));

// Фильтруем категории - оставляем только те, где есть работы
$valid_categories = array();
if (!empty($portfolio_categories)) {
    foreach ($portfolio_categories as $category) {
        $test_query = new WP_Query([
            'post_type' => 'portfolio',
            'posts_per_page' => 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'portfolio-cat',
                    'field' => 'term_id',
                    'terms' => $category->term_id,
                ),
            ),
        ]);

        if ($test_query->have_posts()) {
            $valid_categories[] = $category;
        }
        wp_reset_postdata();
    }
}
?>

<!-- SECTION PORTFOLIO -->
<section class="archive-portfolio-section section-portfolio <?php echo esc_attr($background_color); ?>" style="padding-block: 60px;">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2 style="margin-bottom: 15px;"><?php echo esc_html($section_title); ?></h2>

                <?php if ($section_description) : ?>
                    <p class="section-description archive-portfolio mb-3"><?php echo esc_html($section_description); ?></p>
                <?php endif; ?>

                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">

                <div class="row">
                    <div class="col text-center mb-4 mb-lg-5">
                        <!-- Bootstrap Tabs Navigation -->
                        <div class="nav-scroller mb-0" style="text-transform: uppercase; font-family: 'HelveticaNeueCyr-Light'; font-weight: bold;">
                            <ul class="nav tablist justify-content-lg-center d-flex m-auto align-items-center myTab" id="<?php echo $unique_id; ?>" role="tablist">
                                <!-- Таб "Все" -->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="<?php echo $unique_id; ?>-all-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $unique_id; ?>-all"
                                        type="button" role="tab" aria-controls="<?php echo $unique_id; ?>-all" aria-selected="true">
                                        Все
                                    </button>
                                </li>

                                <?php if (!empty($valid_categories)): ?>
                                    <?php foreach ($valid_categories as $category): ?>
                                        <!-- Декоративная точка -->
                                        <li class="nav-item">
                                            <span class="nav-link px-0">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/menu-decoration-point.svg">
                                            </span>
                                        </li>
                                        <!-- Категория -->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="<?php echo $unique_id; ?>-<?php echo esc_attr($category->slug); ?>-tab"
                                                data-bs-toggle="tab" data-bs-target="#<?php echo $unique_id; ?>-<?php echo esc_attr($category->slug); ?>"
                                                type="button" role="tab" aria-controls="<?php echo $unique_id; ?>-<?php echo esc_attr($category->slug); ?>"
                                                aria-selected="false">
                                                <?php echo esc_html($category->name); ?>
                                            </button>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="d-lg-none">
                            <div class="text-center mb-4">
                                <svg style="color: var(--corporate-color-1)" xmlns="http://www.w3.org/2000/svg" width="25" height="40" fill="currentColor" viewBox="0 0 34 40" class="svg-icon" style="opacity: 1">
                                    <path d="M30.024 16c-.638 0-1.262.191-1.79.55a3.183 3.183 0 0 0-4.8-1.6 3.158 3.158 0 0 0-4.61-1.705V3.2a3.2 3.2 0 1 0-6.4 0v22.357a.2.2 0 0 1-.13.195.194.194 0 0 1-.231-.047l-2.55-2.548a5.62 5.62 0 0 0-5.788-1.367A2.37 2.37 0 0 0 2.5 25.357l5.259 7.886a26 26 0 0 0 2.754 3.474A10.79 10.79 0 0 0 18.34 40h4a10.925 10.925 0 0 0 10.192-6.901c.462-1.152.699-2.382.697-3.624V19.2a3.2 3.2 0 0 0-3.205-3.2m1.6 13.475a8.1 8.1 0 0 1-.582 3.029 9.33 9.33 0 0 1-8.707 5.896h-4a9.2 9.2 0 0 1-6.667-2.783 24.5 24.5 0 0 1-2.583-3.26L3.831 24.47a.774.774 0 0 1 .394-1.161 4.04 4.04 0 0 1 4.16.979l2.55 2.549a1.81 1.81 0 0 0 3.093-1.28V3.2a1.6 1.6 0 0 1 3.2 0v14.4a.8.8 0 0 0 1.6 0V16a1.6 1.6 0 0 1 3.2 0v2.4a.8.8 0 0 0 1.6 0v-.8a1.6 1.6 0 1 1 3.2 0V20a.8.8 0 0 0 1.6 0v-.8a1.6 1.6 0 0 1 3.2 0z" />
                                    <path d="M22.101 6.4h6.069l-1.835 1.833a.801.801 0 0 0 1.133 1.133l3.2-3.2a.8.8 0 0 0 0-1.133l-3.2-3.2a.8.8 0 1 0-1.133 1.133L28.17 4.8h-6.069a.8.8 0 1 0 0 1.6M4.501 9.6a.8.8 0 0 0 .567-1.367L3.233 6.4H9.3a.8.8 0 1 0 0-1.6H3.233l1.835-1.834a.801.801 0 1 0-1.133-1.133l-3.2 3.2a.8.8 0 0 0 0 1.133l3.2 3.2a.8.8 0 0 0 .566.234" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab Content -->
                <div class="tab-content" id="portfolioTabContent">

                    <!-- Все работы -->
                    <div class="tab-pane fade show active" id="<?php echo $unique_id; ?>-all" role="tabpanel" aria-labelledby="<?php echo $unique_id; ?>-all-tab">
                        <div class="row">
                            <?php
                            $args_all = [
                                'post_type' => 'portfolio',
                                'posts_per_page' => $posts_count,
                            ];
                            $query = new WP_Query($args_all);

                            if ($query->have_posts()) :
                                while ($query->have_posts()) :
                                    $query->the_post();
                                    $image = get_post_meta(get_the_ID(), '_img-1', true);
                                    $image_hover = get_post_meta(get_the_ID(), '_img-2', true);
                            ?>
                                    <div class="col-md-6 col-lg-4 mb-5">
                                        <div onclick="galleryOn('gallery-<?php echo get_the_ID(); ?>', 'img-<?php echo get_the_ID(); ?>-0'); return false;" style="cursor: pointer;">
                                            <?php
                                            get_template_part('template-parts/cards/card', null, array(
                                                'image' => $image,
                                                'image_hover' => $image_hover,
                                                'title' => get_the_title(),
                                                'show_title' => $show_card_title,
                                                'card_type' => $card_type,
                                                'link' => ''
                                            ));
                                            ?>
                                        </div>
                                    </div>
                                <?php endwhile;
                            else : ?>
                                <div class="col-12">
                                    <p>Пока нет работ в портфолио.</p>
                                </div>
                            <?php endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <?php if ($query->have_posts() && $show_button) : ?>
                            <a href="<?php echo get_post_type_archive_link('portfolio'); ?>" class="btn btn-lg btn-corporate-color-1 mt-3">
                                <?php echo esc_html($button_text); ?>
                            </a>
                        <?php endif; ?>
                    </div>

                    <?php if (!empty($valid_categories)): ?>
                        <?php foreach ($valid_categories as $category): ?>
                            <!-- <?php echo esc_html($category->name); ?> -->
                            <div class="tab-pane fade" id="<?php echo $unique_id; ?>-<?php echo esc_attr($category->slug); ?>" role="tabpanel"
                                aria-labelledby="<?php echo $unique_id; ?>-<?php echo esc_attr($category->slug); ?>-tab">
                                <div class="row">
                                    <?php
                                    $args_cat = [
                                        'post_type' => 'portfolio',
                                        'posts_per_page' => $posts_count,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'portfolio-cat',
                                                'field' => 'term_id',
                                                'terms' => $category->term_id,
                                            ),
                                        ),
                                    ];
                                    $category_query = new WP_Query($args_cat);

                                    while ($category_query->have_posts()) :
                                        $category_query->the_post();
                                        $image = get_post_meta(get_the_ID(), '_img-1', true);
                                        $image_hover = get_post_meta(get_the_ID(), '_img-2', true);
                                    ?>
                                        <div class="col-md-6 col-lg-4 mb-5">
                                            <div onclick="galleryOn('gallery-<?php echo get_the_ID(); ?>', 'img-<?php echo get_the_ID(); ?>-0'); return false;" style="cursor: pointer;">
                                                <?php
                                                get_template_part('template-parts/cards/card', null, array(
                                                    'image' => $image,
                                                    'image_hover' => $image_hover,
                                                    'title' => get_the_title(),
                                                    'show_title' => $show_card_title,
                                                    'card_type' => $card_type,
                                                    'link' => ''
                                                ));
                                                ?>
                                            </div>
                                        </div>
                                    <?php endwhile;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                                <?php if ($category_query->have_posts() && $show_button): ?>
                                    <a href="<?php echo get_term_link($category); ?>"
                                        class="btn btn-lg btn-corporate-color-1 mt-3">
                                        Смотреть все
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PORTFOLIO -->