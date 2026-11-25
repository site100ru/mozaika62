<?php

/**
 * Template: Секция "Как мы работаем" (новый дизайн)
 * Файл: template-parts/new-steps/new-steps.php
 * Описание: Четыре шага работы с клиентом, на мобильных листаются слайдером
 */
?>

<!-- New steps section -->
<section class="nd-pt-md nd-pb-md">
    <div class="container-xxl">
        <div class="d-flex flex-column align-items-center gap-2 gap-lg-3 text-center">
            <h2 class="nd-title">Как мы работаем:<br>от вашей идеи до готовой мебели</h2>
            <p class="nd-text col-lg-7">Мы постарались сделать процесс заказа максимально простым и комфортным для вас. Всего 4 простых шага — и мебель вашей мечты у вас дома.</p>
        </div>

        <div class="nd-slider mt-4 mt-lg-5">
            <div class="nd-steps__grid nd-slider__track row gx-4 position-relative text-lg-center">
                <!-- Шаг 1 -->
                <div class="col-lg-3">
                    <div class="position-relative d-flex flex-column align-items-start align-items-lg-center">
                        <span class="nd-step__num d-flex align-items-center justify-content-center mb-3 rounded-circle bg-success fs-1 text-white text-nowrap">⋅ 1 ⋅</span>
                        <h3 class="nd-text mb-1 fw-medium">Расскажите нам о своей задумке</h3>
                        <p class="nd-text-sm text-body-secondary">Напишите или позвоните нам. Поделитесь своими идеями, расскажите, что именно вы хотите. Если у вас уже есть дизайн-проект, набросок от руки или просто размеры помещения — отправьте их любым удобным способом (в мессенджеры или на почту). Если проекта нет — ничего страшного, мы поможем во всем разобраться.</p>
                    </div>
                </div>

                <!-- Шаг 2 -->
                <div class="col-lg-3">
                    <div class="position-relative d-flex flex-column align-items-start align-items-lg-center">
                        <span class="nd-step__num d-flex align-items-center justify-content-center mb-3 rounded-circle bg-success fs-1 text-white text-nowrap">⋅ 2 ⋅</span>
                        <h3 class="nd-text mb-1 fw-medium">Расчет стоимости</h3>
                        <p class="nd-text-sm text-body-secondary">На основе вашей информации мы делаем предварительный расчет. Вы сразу понимаете порядок цен, и мы можем скорректировать проект под ваш бюджет, если это необходимо.</p>
                    </div>
                </div>

                <!-- Шаг 3 -->
                <div class="col-lg-3">
                    <div class="position-relative d-flex flex-column align-items-start align-items-lg-center">
                        <span class="nd-step__num d-flex align-items-center justify-content-center mb-3 rounded-circle bg-success fs-1 text-white text-nowrap">⋅ 3 ⋅</span>
                        <h3 class="nd-text mb-1 fw-medium">Договор и старт производства</h3>
                        <p class="nd-text-sm text-body-secondary">Если вас всё устраивает, к вам бесплатно выезжает замерщик. Мы на месте утверждаем финальные сроки, подбираем материалы и фурнитуру, после чего подписываем договор. Вы вносите предоплату, и ваш заказ отправляется на мебельную фабрику.</p>
                    </div>
                </div>

                <!-- Шаг 4 -->
                <div class="col-lg-3">
                    <div class="position-relative d-flex flex-column align-items-start align-items-lg-center">
                        <span class="nd-step__num d-flex align-items-center justify-content-center mb-3 rounded-circle bg-success fs-1 text-white text-nowrap">⋅ 4 ⋅</span>
                        <h3 class="nd-text mb-1 fw-medium">Бережная доставка и установка</h3>
                        <p class="nd-text-sm text-body-secondary">В заранее оговоренный день и час мы привозим мебель, аккуратно поднимаем и профессионально собираем её. Вам остается только принять работу и наслаждаться новым интерьером.</p>
                    </div>
                </div>
            </div>

            <!-- Стрелки слайдера -->
            <div class="d-flex d-lg-none justify-content-end gap-2 mt-3">
                <button type="button" class="nd-slider__arrow nd-slider__arrow--prev" aria-label="Назад">←</button>
                <button type="button" class="nd-slider__arrow nd-slider__arrow--next" aria-label="Вперёд">→</button>
            </div>
        </div>
    </div>
</section>
<!-- /New steps section -->
