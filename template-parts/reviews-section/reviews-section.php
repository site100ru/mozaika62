<?php

/**
 * Template: Секция "Отзывы о нас в независимых источниках"
 * Файл: template-parts/reviews-section/reviews-section.php
 * Описание: Отдельная секция для отображения отзывов клиентов салона
 */
$bg_color = $args['bg_color'] ?? 'bg-light';
?>

<!-- Reviews section -->
<section class="reviews-section py-5 <?php echo esc_attr($bg_color); ?>">
    <div class="container">
        <div class="row">
            <div class="col text-md-center pb-5">
                <h2>Отзывы о нас в независимых источниках</h2>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg">
            </div>
        </div>

        <div class="row">
            <div class="col text-md-center pb-4">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/yandex-logo.svg" class="mb-3">
                <div class="review-rating mb-3 d-flex align-items-md-end justify-content-md-center gap-4">
                    <div>
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg"
                                alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg"
                                alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg"
                                alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg"
                                alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg"
                                alt="stars"></i>
                    </div>
                    <p class="mb-0" style="font-size: 18px;     line-height: 1;">4,9 из 5</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Отзыв 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="review-card rounded h-100">
                    <!-- Фото и информация о клиенте -->
                    <div class="review-header d-flex align-items-center mb-3">
                        <div class="review-photo me-3">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/review-1.webp" alt="Валерия Козлова" class="rounded-circle" width="50" height="50">
                        </div>
                        <div class="review-info">
                            <p class="review-title mb-0">Валерия Козлова</p>
                            <p class="review-date text-muted small mb-0">4 января 2026</p>
                        </div>
                    </div>

                    <!-- Звездочки -->
                    <div class="review-rating mb-3">
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                    </div>

                    <!-- Текст отзыва -->
                    <div class="review-text">
                        <p class="review-description">
                            Отличный магазин! Огромный выбор мебели на любой вкус,цвет и бюджет. Купили кровать - качество сборки и ткани на высоте. Идеально вписался в интерьер, больше спасибо!
                        </p>
                    </div>
                </div>
            </div>

            <!-- Отзыв 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="review-card rounded h-100">
                    <!-- Фото и информация о клиенте -->
                    <div class="review-header d-flex align-items-center mb-3">
                        <div class="review-photo me-3">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/review-2.webp" alt="Зарина Давлетшина" class="rounded-circle" width="50" height="50">
                        </div>
                        <div class="review-info">
                            <p class="review-title mb-0">Зарина Давлетшина</p>
                            <p class="review-date text-muted small mb-0">26 декабря 2025</p>
                        </div>
                    </div>

                    <!-- Звездочки -->
                    <div class="review-rating mb-3">
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                    </div>

                    <!-- Текст отзыва -->
                    <div class="review-text">
                        <p class="review-description">
                            Отличный магазин с большим выбором качественной и стильной мебели. Консультанты помогли подобрать оптимальный вариант, доставка и сборка прошли быстро и аккуратно...
                            <a href="https://yandex.ru/profile/89191942001" style="text-decoration: none; color: #323232; font-weight: 500; font-family: 'Gilroy-Medium';">
                                читать еще
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Отзыв 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="review-card rounded h-100">
                    <!-- Фото и информация о клиенте -->
                    <div class="review-header d-flex align-items-center mb-3">
                        <div class="review-photo me-3">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/review-3.webp" alt="Наталия Лисаченко" class="rounded-circle" width="50" height="50">
                        </div>
                        <div class="review-info">
                            <p class="review-title mb-0">Наталия Лисаченко</p>
                            <p class="review-date text-muted small mb-0">9 ноября 2025</p>
                        </div>
                    </div>

                    <!-- Звездочки -->
                    <div class="review-rating mb-3">
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                    </div>

                    <!-- Текст отзыва -->
                    <div class="review-text">
                        <p class="review-description">
                            Идеальный магазин мебели. Покупала кухню домой,все рассказали и показали. Персонал очень вежливый.Кухню сделали качественно и красиво. Всем довольна!
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Кнопка "Показать все отзывы" -->
        <div class="row text-center mt-4">
            <div class="col">
                <a href="https://yandex.ru/profile/89191942001" target="_blank" class="btn btn-lg btn-corporate-color-1 px-4 mx-3">Все
                    отзывы</a>
            </div>
        </div>
    </div>
</section>
<!-- /Reviews section -->