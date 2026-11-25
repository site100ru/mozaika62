<?php

/**
 * Template: Слайдер первого экрана (новый дизайн)
 * Файл: template-parts/hero-slider/hero-slider.php
 * Описание: Фоновые слайды и навигация слайдера, используется в template-parts/hero/hero.php
 *
 * Параметры:
 * $args['part'] - какую часть вывести: 'slides' (фоновые слайды) или 'nav' (стрелки и подпись), по умолчанию 'slides'
 */
$part = $args['part'] ?? 'slides';
?>

<?php if ($part === 'slides') : ?>
    <!-- Hero slides -->
    <div class="position-absolute top-0 bottom-0 start-0 end-0 z-0">
        <!-- Слайд 1 -->
        <div class="nd-hero__slide nd-cover position-absolute top-0 bottom-0 start-0 end-0 is-active" data-title="Джина" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/home/hero-dzhina.webp);"></div>

        <!-- Слайд 2 -->
        <div class="nd-hero__slide nd-cover position-absolute top-0 bottom-0 start-0 end-0" data-title="Аккорд" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/home/hero-akkord.webp);"></div>

        <!-- Слайд 3 -->
        <div class="nd-hero__slide nd-cover position-absolute top-0 bottom-0 start-0 end-0" data-title="Афина" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/home/hero-afina.webp);"></div>

        <!-- Слайд 4 -->
        <div class="nd-hero__slide nd-cover position-absolute top-0 bottom-0 start-0 end-0" data-title="Ангора" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/home/hero-angora.webp);"></div>

        <!-- Слайд 5 -->
        <div class="nd-hero__slide nd-cover position-absolute top-0 bottom-0 start-0 end-0" data-title="Артис" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/home/hero-artis.webp);"></div>

        <!-- Слайд 6 -->
        <div class="nd-hero__slide nd-cover position-absolute top-0 bottom-0 start-0 end-0" data-title="Селма" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/home/hero-selma.webp);"></div>
    </div>
    <!-- /Hero slides -->
<?php else : ?>
    <!-- Hero slider navigation -->
    <div class="d-flex align-items-end justify-content-between w-100">
        <!-- Кнопка назад -->
        <button type="button" class="nd-hero__arrow--prev nd-fade" aria-label="Предыдущий слайд">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-slider-prev.svg" width="50" height="50" alt="">
        </button>

        <!-- Название слайда и точки -->
        <div class="d-flex flex-column align-items-center gap-2">
            <span class="nd-hero__caption small fw-medium text-uppercase text-white-50">Джина</span>
            <span class="nd-hero__dots d-flex"></span>
        </div>

        <!-- Кнопка вперёд -->
        <button type="button" class="nd-hero__arrow--next nd-fade" aria-label="Следующий слайд">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-slider-next.svg" width="50" height="50" alt="">
        </button>
    </div>
    <!-- /Hero slider navigation -->
<?php endif; ?>
