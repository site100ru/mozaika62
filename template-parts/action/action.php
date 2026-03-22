<?php
/**
 * Вызывается как get_template_part 'template-parts/action/action' с передачей параметров 
 * Примеры в файле a.php
 * 
 * ПАРАМЕТРЫ :
 * - show_button: показать/скрыть кнопку "Показать все акции" ('true'/'false')
 * - show_breadcrumbs: показать/скрыть хлебные крошки ('true'/'false')  
 * - breadcrumbs_title: текст для хлебных крошек
 * - actions_count: количество выводимых акций (число или 'all')
 * - bg_color: CSS класс фона секции ('bg-white', 'bg-light' и т.д.)
 * - section_title: заголовок секции
 * - card_type: 'modal' (с модальными окнами) или 'simple' (простые с описанием)
 * - filter_category: фильтр по категориям ('kitchen', 'closets', 'kitchen,closets')
 * 
 * АДАПТИВНОСТЬ в функции get_column_classes
 */
// Массив с данными акций
$actions_data = [
    [
        'image_path' => get_stylesheet_directory_uri() . '/img/actions/new/new-action-6.webp',
        'alt_text' => 'Скидка 5% На все кухни CUCINA',
        'order' => 1,
        'category' => 'kitchen, home, cucina',
        'modal_data' => 'discount-5',
        'description' => 'Скидка 5% На все кухни CUCINA до 31 марта'
    ],
    [
        'image_path' => get_stylesheet_directory_uri() . '/img/actions/new/new-action-7.webp',
        'alt_text' => 'Скидка 10% На кухни с фасадами SMART',
        'order' => 2,
        'category' => 'kitchen, home, cucina',
        'modal_data' => 'discount-10',
        'description' => 'Скидка 10% На кухни с фасадами SMART'
    ],
    [
        'image_path' => get_stylesheet_directory_uri() . '/img/actions/new/new-action-1.webp',
        'alt_text' => 'При единовременной покупке кухни и шкафа скидка на общий заказ 20%',
        'order' => 3,
        'category' => 'kitchen, closets, cucina',
        'modal_data' => 'discount-20',
        'description' => 'При единовременной покупке кухни и шкафа скидка на общий заказ 20%'
    ],
    [
        'image_path' => get_stylesheet_directory_uri() . '/img/actions/new/new-action-2.webp',
        'alt_text' => 'Пластиковая столешница 26 мм В ПОДАРОК',
        'order' => 4,
        'category' => 'kitchen, home',
        'modal_data' => 'gift-plastic-tabletop',
        'description' => 'При заказе кухни от 100 000 Пластиковая столешница 26 мм В ПОДАРОК'
    ],
    [
        'image_path' => get_stylesheet_directory_uri() . '/img/actions/new/new-action-3.webp',
        'alt_text' => 'Повторный заказ',
        'order' => 5,
        'category' => 'kitchen, closets',
        'modal_data' => 'repeat-order',
        'description' => 'На повторный заказ дополнительная скидка 10%'
    ],
    /*[
        'image_path' => get_stylesheet_directory_uri() . '/img/actions/new/new-action-4.webp',
        'alt_text' => 'Комплект со скидкой',
        'order' => 6,
        'category' => 'kitchen, home',
        'modal_data' => 'discount-12',
        'description' => 'Пока другие отдыхают, заказывайте со скидкой от 5 до 12%'
    ]*/
    // [
    //     'image_path' => get_stylesheet_directory_uri() . '/img/actions/new/new-action-5.webp',
    //     'alt_text' => 'При заказе кухни от 150 000 мойка из искуственного камня В ПОДАРОК',
    //     'order' => 7,
    //     'category' => 'kitchen, closets, home',
    //     'modal_data' => 'gift-artificial-stone',
    //     'description' => 'При заказе кухни от 150 000 мойка из искуственного камня В ПОДАРОК'
    // ]
]; 

// Получение атрибутов с значениями по умолчанию
$show_button = isset($args['show_button'])
    ? $args['show_button']
    : 'false'; // Показать/скрыть кнопку "Показать все акции" ('true'/'false')

$show_breadcrumbs = isset($args['show_breadcrumbs'])
    ? $args['show_breadcrumbs']
    : 'false'; // Показать/скрыть хлебные крошки ('true'/'false')

$breadcrumbs_title = isset($args['breadcrumbs_title'])
    ? $args['breadcrumbs_title']
    : ''; // Хлебные крошки 

$actions_count = isset($args['actions_count'])
    ? $args['actions_count']
    : '3'; // Количество выводимых акций (число или 'all' для всех)

$bg_color = isset($args['bg_color'])
    ? $args['bg_color']
    : 'bg-white'; // CSS класс фона секции (например: 'bg-white', 'bg-light', '')

$additional_classes = isset($args['additional_classes'])
    ? $args['additional_classes']
    : ''; // Дополнительные CSS классы для строки карточек

$section_title = isset($args['section_title'])
    ? $args['section_title']
    : 'Наши акции'; // Заголовок секции

$card_type = isset($args['card_type'])
    ? $args['card_type']
    : 'modal'; // Тип карточек: 'modal' (с модальными окнами) или 'simple' (простые с описанием)

$filter_category = isset($args['filter_category'])
    ? $args['filter_category']
    : ''; // Фильтрация по категории ('kitchen', 'closets', 'kitchen,closets' или '' для всех)

$modal_id = isset($args['modal_id'])
    ? $args['modal_id']
    : 'orderModal'; // Уникальный ID модального окна

// Определение количества и набора акций для вывода
$filtered_actions = $actions_data;

/**
 * БЛОК ФИЛЬТРАЦИИ ПО КАТЕГОРИЯМ
 * Если указан параметр filter_category, фильтрует массив акций
 * оставляя только те, которые относятся к указанным категориям
 */
if (!empty($filter_category)) {
    $filter_categories = array_map('trim', explode(',', $filter_category)); // Разбиваем на массив и убираем пробелы

    $filtered_actions = array_filter($actions_data, function ($action) use ($filter_categories) {
        $action_categories = array_map('trim', explode(',', $action['category'])); // Разбиваем категории акции

        // Проверяем пересечение категорий
        return !empty(array_intersect($filter_categories, $action_categories));
    });
}

/**
 * ОПРЕДЕЛЕНИЕ КОЛИЧЕСТВА ОТОБРАЖАЕМЫХ АКЦИЙ
 * Если actions_count = 'all' - показываем все отфильтованные акции
 * Если число - берем первые N акций из отфильтрованного массива
 */
if ($actions_count === 'all') {
    $displayed_actions = $filtered_actions;
} else {
    $count = intval($actions_count);
    $displayed_actions = array_slice($filtered_actions, 0, $count); // первые N акций
}

$total_actions = count($displayed_actions);


/**
 * ФУНКЦИЯ ОПРЕДЕЛЕНИЯ КЛАССОВ BOOTSTRAP КОЛОНОК
 * 
 * Логика работы:
 * - 1 карточка: центрируется в контейнере (6 колонок + offset)
 * - 2 карточки: по 6 колонок каждая (2 в ряд на десктопе)
 * - 3 карточки: по 4 колонки каждая (3 в ряд на десктопе)
 * - 4 карточки: по 6 колонок каждая (2 в ряд, всего 2 ряда)
 * - 5 карточек: первые 2 по 6 колонок, остальные 3 по 4 колонки (макет 2+3)
 * - 6 карточек: все по 4 колонки (2 ряда по 3 карточки)
 * - 7 карточек: первые 4 по 6 колонок (2 ряда по 2), остальные 3 по 4 колонки
 * - 8 карточек: первые 2 по 6 колонок, следующие 6 по 4 колонки
 * - Больше 8: все по 4 колонки
 * 
 * На планшетах (md): все карточки по 6 колонок (2 в ряд)
 * На мобильных: все карточки по 12 колонок (1 в ряд)
 */
function get_column_classes($total, $index)
{
    switch ($total) {
        case 1:
            return 'col-lg-6 offset-lg-3 col-md-6 offset-md-3 mb-3'; // 1 карточка по центру в 6 колонок
        case 2:
            return 'col-lg-6 col-md-6 mb-3'; // 2 карточки по 6 колонок
        case 3:
            return 'col-lg-4 col-md-6 mb-3'; // 3 карточки: десктоп по 4 колонки, планшет по 6 колонок
        case 4:
            return 'col-lg-6 col-md-6 mb-3'; // 4 карточки - две строки по 6 колонок
        case 5:
            if ($index < 2) {
                return 'col-lg-6 col-md-6 mb-3'; // Первые 2: по 6 колонок
            } else {
                return 'col-lg-4 col-md-6 mb-3'; // Остальные 3: по 4 колонки
            }
        case 6:
            return 'col-lg-4 col-md-6 mb-3'; // 6 карточек: десктоп 2 ряда по 3 карточки (4 колонки), планшет по 6 колонок
        case 7:
            if ($index < 2) {
                return 'col-lg-6 col-md-6 mb-3'; // Первые 2 по 6 колонок (2 строки)
            } else {
                return 'col-lg-4 col-md-6 mb-3'; // Остальные : десктоп по 4 колонки, планшет по 6 колонок
            }
        case 8:
            if ($index < 2) {
                return 'col-lg-6 col-md-6 mb-3'; // Первые 2 по 6 колонок
            } else if ($index < 5) {
                return 'col-lg-4 col-md-6 mb-3'; // Следующие 3: десктоп по 4 колонки, планшет по 6 колонок
            } else {
                return 'col-lg-4 col-md-6 mb-3'; // Остальные 3: десктоп по 4 колонки, планшет по 6 колонок
            }
        default:
            return 'col-lg-4 col-md-6 mb-3'; // По умолчанию: десктоп по 4 колонки, планшет по 6 колонок
    }
}
?>

<!-- Section actions -->
<section class="archive-portfolio-section archive-portfolio <?php echo esc_attr($bg_color); ?>  pb-5">
    <div class="container">

        <?php if ($show_breadcrumbs === 'true'): ?>
            <div class="row">
                <div class="col">
                    <nav class="breadcrumbs pt-4">
                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/breadcrumbs-icon.svg"></a>
                        / Акции
                        <?php echo esc_html($breadcrumbs_title); ?>
                    </nav>
                </div>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col text-md-center<?php echo ($show_breadcrumbs === 'false') ? ' pt-5' : ''; ?>">
                <h2><?php echo esc_html($section_title); ?></h2>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
            </div>
        </div>

        <div class="row text-start <?php echo esc_attr($additional_classes); ?>">
            <?php foreach ($displayed_actions as $index => $action): ?>
                <div class="<?php echo get_column_classes($total_actions, $index); ?>">
                    <?php if ($card_type === 'modal'): ?>
                        <!-- Карточка с модальным окном -->
                        <a href="#" class="portfolio-item-link" data-bs-toggle="modal"
                            data-bs-target="#<?php echo esc_attr($modal_id); ?>"
                            data-action="<?php echo esc_attr($action['modal_data']); ?>">
                            <img src="<?php echo esc_url($action['image_path']); ?>" class="img-fluid rounded mb-3 w-100"
                                alt="<?php echo esc_attr($action['alt_text']); ?>"
                                data-category="<?php echo esc_attr($action['category']); ?>">
                        </a>
                        <p class="mb-5 d-none"><?php echo esc_html($action['description']); ?></p>
                    <?php else: ?>
                        <!-- Простая карточка с описанием -->
                        <img src="<?php echo esc_url($action['image_path']); ?>" class="img-fluid rounded mb-3 w-100"
                            alt="<?php echo esc_attr($action['alt_text']); ?>"
                            data-category="<?php echo esc_attr($action['category']); ?>">
                        <p class="mb-5 d-none"><?php echo esc_html($action['description']); ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <?php if ($show_button === 'true'): ?>
            <div class="row">
                <div class="col text-md-center">
                    <a href="/акции/" class="btn btn-lg btn-corporate-color-1 mt-4">Показать все акции</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php if ($card_type === 'modal'): ?>
    <!-- Order Modal -->
    <div class="modal fade" id="<?php echo esc_attr($modal_id); ?>" tabindex="-1"
        aria-labelledby="<?php echo esc_attr($modal_id); ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/callback-mail.php"
                class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="<?php echo esc_attr($modal_id); ?>Label">Оставить заявку</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <p><small>Мы свяжемся с Вами в ближайшее время и ответим на все вопросы по заявке! Для звонка
                                    введите Ваше имя и телефон.</small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control telMask" placeholder="Ваш телефон*"
                                inputmode="text" required>
                        </div>
                    </div>
                    <input type="hidden" name="action_type" class="actionTypeInput" value="">
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="g-recaptcha-response-order-2" name="g-recaptcha-response">
                    <button type="submit" class="btn btn-corporate-color-1 mx-auto">Жду звонка</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Обработка клика по ссылке акции для передачи данных в модальное окно
            const modalId = '<?php echo esc_js($modal_id); ?>';
            const actionLinks = document.querySelectorAll(`[data-bs-target="#${modalId}"]`);
            const modal = document.getElementById(modalId);

            if (modal && actionLinks.length > 0) {
                const actionTypeInput = modal.querySelector('.actionTypeInput');

                actionLinks.forEach(link => {
                    link.addEventListener('click', function () {
                        const actionData = this.getAttribute('data-action');
                        if (actionTypeInput) {
                            actionTypeInput.value = actionData;
                        }
                    });
                });
            }
        });
    </script>
<?php endif; ?>

<!-- /Section actions -->