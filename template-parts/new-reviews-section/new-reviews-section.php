<?php

/**
 * Template: Секция "Отзывы о нас" (новый дизайн)
 * Файл: template-parts/new-reviews-section/new-reviews-section.php
 * Описание: Отдельная секция для отображения отзывов клиентов салона
 */
$reviews_url = $args['url'] ?? 'https://yandex.ru/profile/89191942001';
?>

<!-- New reviews section -->
<section class="nd-pt-lg nd-pb-md">
    <div class="container-xxl">
        <div class="d-flex flex-column align-items-center gap-2 gap-lg-3 text-center">
            <h2 class="nd-title">Отзывы о нас</h2>
            <p class="nd-text col-lg-8">Здесь вы можете прочитать отзывы наших клиентов. Мы собрали реальные истории тех, кто уже заказал у нас кухню и остался доволен результатом.</p>
        </div>

        <div class="nd-slider mt-4 mt-lg-5">
            <div class="nd-slider__track row g-4">
                <!-- Отзыв 1 -->
                <div class="col-lg-4">
                    <div class="d-flex flex-column gap-3 h-100 p-3 bg-body-tertiary">
                        <!-- Звездочки -->
                        <div class="nd-stars d-flex gap-1">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                        </div>

                        <!-- Фото и информация о клиенте -->
                        <div class="d-flex align-items-center gap-2">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/review-1.webp" alt="Валерия Козлова" class="nd-reviews__avatar flex-shrink-0 rounded-circle object-fit-cover bg-white" width="52" height="52" loading="lazy">
                            <div>
                                <div class="nd-text fw-medium">Валерия Козлова</div>
                                <div class="nd-text-xs text-secondary">4 января 2026</div>
                            </div>
                        </div>

                        <!-- Текст отзыва -->
                        <p class="nd-text-sm text-body-secondary">
                            Отличный магазин! Огромный выбор мебели на любой вкус, цвет и бюджет. Купили кровать - качество сборки и ткани на высоте. Идеально вписался в интерьер, больше спасибо!
                        </p>
                    </div>
                </div>

                <!-- Отзыв 2 -->
                <div class="col-lg-4">
                    <div class="d-flex flex-column gap-3 h-100 p-3 bg-body-tertiary">
                        <!-- Звездочки -->
                        <div class="nd-stars d-flex gap-1">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                        </div>

                        <!-- Фото и информация о клиенте -->
                        <div class="d-flex align-items-center gap-2">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/review-2.webp" alt="Зарина Давлетшина" class="nd-reviews__avatar flex-shrink-0 rounded-circle object-fit-cover bg-white" width="52" height="52" loading="lazy">
                            <div>
                                <div class="nd-text fw-medium">Зарина Давлетшина</div>
                                <div class="nd-text-xs text-secondary">26 декабря 2025</div>
                            </div>
                        </div>

                        <!-- Текст отзыва -->
                        <p class="nd-text-sm text-body-secondary">
                            Отличный магазин с большим выбором качественной и стильной мебели. Консультанты помогли подобрать оптимальный вариант, доставка и сборка прошли быстро и аккуратно... <a href="<?php echo esc_url($reviews_url); ?>" target="_blank">Еще</a>
                        </p>
                    </div>
                </div>

                <!-- Отзыв 3 -->
                <div class="col-lg-4">
                    <div class="d-flex flex-column gap-3 h-100 p-3 bg-body-tertiary">
                        <!-- Звездочки -->
                        <div class="nd-stars d-flex gap-1">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                        </div>

                        <!-- Фото и информация о клиенте -->
                        <div class="d-flex align-items-center gap-2">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/review-3.webp" alt="Наталия Лисаченко" class="nd-reviews__avatar flex-shrink-0 rounded-circle object-fit-cover bg-white" width="52" height="52" loading="lazy">
                            <div>
                                <div class="nd-text fw-medium">Наталия Лисаченко</div>
                                <div class="nd-text-xs text-secondary">9 ноября 2025</div>
                            </div>
                        </div>

                        <!-- Текст отзыва -->
                        <p class="nd-text-sm text-body-secondary">
                            Идеальный магазин мебели. Покупала кухню домой, все рассказали и показали. Персонал очень вежливый. Кухню сделали качественно и красиво. Всем довольна!
                        </p>
                    </div>
                </div>
            </div>

            <!-- Стрелки слайдера -->
            <div class="d-flex d-lg-none justify-content-end gap-2 mt-3">
                <button type="button" class="nd-slider__arrow nd-slider__arrow--prev" aria-label="Назад">←</button>
                <button type="button" class="nd-slider__arrow nd-slider__arrow--next" aria-label="Вперёд">→</button>
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-between justify-content-lg-center gap-3 gap-lg-5 mt-4">
            <div class="d-flex align-items-center gap-3 gap-lg-4">
                <div class="nd-reviews__score d-flex flex-column align-items-center gap-1">
                    <span class="display-5 fw-normal lh-1">4.9</span>
                    <div class="nd-stars d-flex gap-1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ico-star.svg" alt="">
                    </div>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/yandex.png" class="nd-reviews__yandex" width="111" height="32" alt="Яндекс">
            </div>
            <a href="<?php echo esc_url($reviews_url); ?>" target="_blank" class="btn nd-btn nd-reviews__btn">Все отзывы</a>
        </div>
    </div>
</section>
<!-- /New reviews section -->
