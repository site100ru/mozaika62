<?php

/**
 * Template: Секция "Частые вопросы" (новый дизайн)
 * Файл: template-parts/new-faq/new-faq.php
 * Описание: Аккордеон с частыми вопросами, выводится только на мобильных
 */
?>

<!-- New faq section -->
<section class="nd-pt-lg nd-pb-lg d-lg-none bg-body-tertiary">
    <div class="container-xxl">
        <div class="d-flex flex-column align-items-center gap-3 text-center">
            <h2 class="nd-title">Частые вопросы</h2>
            <p class="nd-text">Здесь вы найдёте ответы на самые популярные вопросы наших пользователей. Мы собрали справочную информацию, разъяснили некоторые моменты.</p>
        </div>

        <div class="d-flex flex-column gap-1 mt-4" id="nd-faq">
            <!-- Вопрос 1 -->
            <div class="p-2 rounded-1 bg-white">
                <button type="button" class="nd-faq__question collapsed position-relative d-flex align-items-center w-100 pe-4 text-start fw-medium" data-bs-toggle="collapse" data-bs-target="#nd-faq-1" aria-expanded="false">Сколько времени изготавливается кухня?</button>
                <div id="nd-faq-1" class="collapse" data-bs-parent="#nd-faq">
                    <p class="pt-3 text-body-secondary">Срок производства зависит от материалов и составляет от 20 рабочих дней. Сроки, в обязательном порядке, согласовываются с заказчиком при заключении договора.</p>
                </div>
            </div>

            <!-- Вопрос 2 -->
            <div class="p-2 rounded-1 bg-white">
                <button type="button" class="nd-faq__question position-relative d-flex align-items-center w-100 pe-4 text-start fw-medium" data-bs-toggle="collapse" data-bs-target="#nd-faq-2" aria-expanded="true">Как вызвать специалиста для проведения замера?</button>
                <div id="nd-faq-2" class="collapse show" data-bs-parent="#nd-faq">
                    <p class="pt-3 text-body-secondary">Вызвать замерщика Вы можете любым из способов: оставить онлайн-заявку на нашем сайте, написать на электронный адрес: <a href="mailto:mozaika62@bk.ru" class="text-decoration-underline">mozaika62@bk.ru</a>, позвонить по телефону <a href="tel:89511014610" class="text-decoration-underline">8 (951) 101-46-10</a> или оставить заявку на обратный звонок, написать в Telegram или Whatsapp.</p>
                </div>
            </div>

            <!-- Вопрос 3 -->
            <div class="p-2 rounded-1 bg-white">
                <button type="button" class="nd-faq__question collapsed position-relative d-flex align-items-center w-100 pe-4 text-start fw-medium" data-bs-toggle="collapse" data-bs-target="#nd-faq-3" aria-expanded="false">Сколько стоит вызов замерщика?</button>
                <div id="nd-faq-3" class="collapse" data-bs-parent="#nd-faq">
                    <p class="pt-3 text-body-secondary">Стоимость выезда замерщика составляет 1500 руб. Но если Вы заключаете договор, то замер для Вас обходится бесплатно, а оплаченный Вами выезд вычитается из суммы оплаты.</p>
                </div>
            </div>

            <!-- Вопрос 4 -->
            <div class="p-2 rounded-1 bg-white">
                <button type="button" class="nd-faq__question collapsed position-relative d-flex align-items-center w-100 pe-4 text-start fw-medium" data-bs-toggle="collapse" data-bs-target="#nd-faq-4" aria-expanded="false">Если эскиз кухни уже есть, можно ли по нему получить расчет?</button>
                <div id="nd-faq-4" class="collapse" data-bs-parent="#nd-faq">
                    <p class="pt-3 text-body-secondary">Конечно! Направьте эскиз с Вашей кухней (или другой корпусной мебелью) на нашу электронную почту: <a href="mailto:mozaika62@bk.ru" class="text-decoration-underline">mozaika62@bk.ru</a>, дополнительно указав в письме материал фасадов, комплектацию, габариты мебели и мы предоставим расчет в ответном письме.</p>
                </div>
            </div>

            <!-- Вопрос 5 -->
            <div class="p-2 rounded-1 bg-white">
                <button type="button" class="nd-faq__question collapsed position-relative d-flex align-items-center w-100 pe-4 text-start fw-medium" data-bs-toggle="collapse" data-bs-target="#nd-faq-5" aria-expanded="false">У вас цены ниже, чем обычно по городу. Почему?</button>
                <div id="nd-faq-5" class="collapse" data-bs-parent="#nd-faq">
                    <p class="pt-3 text-body-secondary">Наш салон является официальным представителем мебельной фабрики Cucina, которая выполняет заказы на всю страну и ближнее зарубежье, а следовательно имеет большие объемы закупки материалов и производства, что и удешевляет конечную стоимость продукции.</p>
                </div>
            </div>

            <!-- Вопрос 6 -->
            <div class="p-2 rounded-1 bg-white">
                <button type="button" class="nd-faq__question collapsed position-relative d-flex align-items-center w-100 pe-4 text-start fw-medium" data-bs-toggle="collapse" data-bs-target="#nd-faq-6" aria-expanded="false">Какая модель кухни самая популярная?</button>
                <div id="nd-faq-6" class="collapse" data-bs-parent="#nd-faq">
                    <p class="pt-3 text-body-secondary">Предпочтения наших клиентов настолько разнообразны, что выделить какую-либо модель достаточно сложно. При разработке проекта мы учитываем все Ваши пожелания, а благодаря широчайшей коллекции фасадов и столешниц, могут быть сотни разных вариаций. В одном можем уверить Вас точно: какая бы ни была кухня от нашей фабрики по стилю или конфигурации, она идеально впишется в ваш интерьер и прослужит долгие годы.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /New faq section -->
