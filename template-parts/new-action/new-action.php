<?php

/**
 * Template: Секция "Наши акции" (новый дизайн)
 * Файл: template-parts/new-action/new-action.php
 * Описание: Баннеры акций, по клику открывается модальное окно заявки
 */
?>

<!-- New actions section -->
<section class="nd-pt-md nd-pb-lg">
    <div class="container-xxl">
        <h2 class="nd-title mb-3 mb-lg-4">Наши акции</h2>

        <div class="row gx-4 gy-3">
            <!-- Акция 1 -->
            <div class="col-lg-4">
                <a href="#" class="nd-zoom d-block overflow-hidden" data-bs-toggle="modal" data-bs-target="#orderModal" data-action="gift-plastic-tabletop">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/action-1.webp" class="d-block w-100" loading="lazy" alt="При заказе кухни от 100 000 ₽ пластиковая столешница в подарок">
                </a>
            </div>

            <!-- Акция 2 -->
            <div class="col-lg-4">
                <a href="#" class="nd-zoom d-block overflow-hidden" data-bs-toggle="modal" data-bs-target="#orderModal" data-action="repeat-order">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/action-2.webp" class="d-block w-100" loading="lazy" alt="На повторный заказ скидка 10%">
                </a>
            </div>

            <!-- Акция 3 -->
            <div class="col-lg-4">
                <a href="#" class="nd-zoom d-block overflow-hidden" data-bs-toggle="modal" data-bs-target="#orderModal" data-action="discount-20">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/action-3.webp" class="d-block w-100" loading="lazy" alt="При единовременной покупке кухни и шкафа скидка на общий заказ 20%">
                </a>
            </div>
        </div>

        <!-- Кнопка -->
        <div class="mt-4 text-center">
            <a href="/акции/" class="btn nd-btn nd-btn--fluid">Смотреть акции</a>
        </div>
    </div>
</section>
<!-- /New actions section -->
