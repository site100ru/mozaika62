<?php

/**
 * Section New Works
 *
 * Выводит последние работы из портфолио с табами по категориям (новый дизайн)
 *
 * Параметры:
 * $args['section_title'] - заголовок секции, по умолчанию 'Последние выполненные работы'
 * $args['posts_count']   - количество работ в одном табе, по умолчанию 6
 *
 * Пример использования:
 * <?php get_template_part('template-parts/new-works/new-works', null, array(
 *     'section_title' => 'Наши работы',
 *     'posts_count' => 6
 * )); ?>
 */

// Получаем параметры
$section_title = isset($args['section_title']) ? $args['section_title'] : 'Последние выполненные работы';
$posts_count = isset($args['posts_count']) ? $args['posts_count'] : 6;

// Табы — все непустые категории portfolio-cat в порядке добавления в админке
$valid_tabs = get_terms(array(
    'taxonomy' => 'portfolio-cat',
    'hide_empty' => true,
    'orderby' => 'term_id',
));
if (is_wp_error($valid_tabs)) {
    $valid_tabs = array();
}

// Работы, для которых нужно вывести галерею
$gallery_posts = array();
?>

<!-- SECTION NEW WORKS -->
<section class="nd-pt-lg nd-pt-mob-md nd-pb-md">
    <div class="container-xxl">
        <div class="d-flex flex-column align-items-center gap-3 text-center">
            <h2 class="nd-title"><?php echo esc_html($section_title); ?></h2>
            <p class="nd-text col-lg-8">Проектируем и изготавливаем корпусную мебель с учетом особенностей вашего интерьера. Разумный подход к стоимости и безупречное качество.</p>
        </div>

        <!-- Bootstrap Tabs Navigation -->
        <div class="nd-tabs d-flex flex-wrap align-items-center justify-content-center gap-2 gap-lg-4 mx-auto my-4 p-lg-1 rounded-pill" role="tablist">
            <?php $tab_index = 0; ?>
            <?php foreach ($valid_tabs as $category): ?>
                <!-- Категория -->
                <button class="nd-tabs__item nd-text-xs px-2 px-lg-3 py-1 py-lg-2 rounded-pill fw-medium text-uppercase<?php echo $tab_index ? '' : ' active'; ?>" id="nd-works-<?php echo $category->term_id; ?>-tab" data-bs-toggle="tab" data-bs-target="#nd-works-<?php echo $category->term_id; ?>"
                    type="button" role="tab" aria-controls="nd-works-<?php echo $category->term_id; ?>" aria-selected="<?php echo $tab_index ? 'false' : 'true'; ?>">
                    <?php echo esc_html($category->name); ?>
                </button>
                <?php $tab_index++; ?>
            <?php endforeach; ?>

            <!-- Ссылка на каталог -->
            <a href="<?php echo home_url('/каталог/'); ?>" class="nd-tabs__item nd-text-xs px-2 px-lg-3 py-1 py-lg-2 rounded-pill fw-medium text-uppercase">Каталог</a>
        </div>

        <!-- Tab Content -->
        <div class="tab-content">
            <?php $tab_index = 0; ?>
            <?php foreach ($valid_tabs as $category): ?>
                <!-- <?php echo esc_html($category->name); ?> -->
                <div class="tab-pane fade<?php echo $tab_index ? '' : ' show active'; ?> nd-slider" id="nd-works-<?php echo $category->term_id; ?>" role="tabpanel" aria-labelledby="nd-works-<?php echo $category->term_id; ?>-tab">
                    <div class="nd-slider__track row g-4">
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
                            $gallery_posts[get_the_ID()] = get_the_title();
                        ?>
                            <div class="col-lg-4">
                                <button type="button" class="nd-zoom d-flex flex-column gap-2 w-100 text-start" data-bs-toggle="modal" data-bs-target="#nd-gallery-<?php echo get_the_ID(); ?>">
                                    <span class="ratio d-block overflow-hidden" style="--bs-aspect-ratio: 66.6%;">
                                        <img src="<?php echo esc_url(get_post_meta(get_the_ID(), '_img-1', true)); ?>" class="object-fit-cover" alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy">
                                    </span>
                                    <span class="nd-works__caption nd-text text-body"><?php the_title(); ?></span>
                                </button>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>

                    <!-- Стрелки слайдера -->
                    <div class="d-flex d-lg-none justify-content-end gap-2 mt-3">
                        <button type="button" class="nd-slider__arrow nd-slider__arrow--prev" aria-label="Назад">←</button>
                        <button type="button" class="nd-slider__arrow nd-slider__arrow--next" aria-label="Вперёд">→</button>
                    </div>

                    <!-- Кнопка -->
                    <div class="mt-3 mt-lg-4 text-center">
                        <a href="<?php echo get_term_link($category); ?>" class="btn nd-btn nd-btn--fluid">Смотреть работы</a>
                    </div>
                </div>
                <?php $tab_index++; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- END SECTION NEW WORKS -->

<!-- Галереи работ -->
<?php foreach ($gallery_posts as $gallery_id => $gallery_title): ?>
    <?php
    $gallery_images = [];
    for ($i = 1; $i <= 9; $i++) {
        $src = get_post_meta($gallery_id, '_img-' . $i, true);
        if ($src) {
            $gallery_images[] = $src;
        }
    }
    ?>
    <div class="modal fade" id="nd-gallery-<?php echo $gallery_id; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content bg-black bg-opacity-75">
                <button type="button" class="btn-close btn-close-white position-fixed top-0 end-0 m-4 z-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <div id="nd-gallery-<?php echo $gallery_id; ?>-slides" class="carousel slide h-100">
                    <div class="carousel-inner h-100">
                        <?php foreach ($gallery_images as $n => $src): ?>
                            <div class="carousel-item h-100 p-4<?php echo $n ? '' : ' active'; ?>">
                                <img src="<?php echo esc_url($src); ?>" class="d-block w-100 h-100 object-fit-contain" alt="<?php echo esc_attr($gallery_title); ?>" loading="lazy">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#nd-gallery-<?php echo $gallery_id; ?>-slides" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#nd-gallery-<?php echo $gallery_id; ?>-slides" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
