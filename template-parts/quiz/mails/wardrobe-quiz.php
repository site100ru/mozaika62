<?php
session_start();
$win = "true";

// Общие данные
$name = isset($_POST['form-name']) ? $_POST['form-name'] : '';
$phone = isset($_POST['form-phone']) ? $_POST['form-phone'] : '';

// Способы связи (чекбоксы)
$answer_final_1 = isset($_POST['form-answer-final-1']) ? $_POST['form-answer-final-1'] : '';
$answer_final_2 = isset($_POST['form-answer-final-2']) ? $_POST['form-answer-final-2'] : '';
$answer_final_3 = isset($_POST['form-answer-final-3']) ? $_POST['form-answer-final-3'] : '';

// Собираем способы связи в одну строку
$contact_methods = array();
if ($answer_final_1) $contact_methods[] = $answer_final_1;
if ($answer_final_2) $contact_methods[] = $answer_final_2;
if ($answer_final_3) $contact_methods[] = $answer_final_3;
$contact_methods_str = !empty($contact_methods) ? implode(', ', $contact_methods) : 'Не выбрано';

// Данные шкафа
$answer1_wardrobe = isset($_POST['form-question-1-wardrobe']) ? $_POST['form-question-1-wardrobe'] : 'Не указано';
$answer2_wardrobe = isset($_POST['form-question-2-wardrobe']) ? $_POST['form-question-2-wardrobe'] : 'Не указано';
$answer3_wardrobe = isset($_POST['form-question-3-wardrobe']) ? $_POST['form-question-3-wardrobe'] : 'Не указано';

// Ширина шкафа (множественный выбор)
$widths = array();
for ($i = 1; $i <= 10; $i++) {
    if (isset($_POST['form-answer-4-wardrobe-' . $i]) && $_POST['form-answer-4-wardrobe-' . $i]) {
        $widths[] = $_POST['form-answer-4-wardrobe-' . $i];
    }
}
$widths_str = !empty($widths) ? implode(', ', $widths) : 'Не указано';

// Количество дверей (множественный выбор)
$doors = array();
for ($i = 1; $i <= 6; $i++) {
    if (isset($_POST['form-answer-5-wardrobe-' . $i]) && $_POST['form-answer-5-wardrobe-' . $i]) {
        $doors[] = $_POST['form-answer-5-wardrobe-' . $i];
    }
}
$doors_str = !empty($doors) ? implode(', ', $doors) : 'Не указано';

$answer55_wardrobe = isset($_POST['form-question-5-5-wardrobe']) ? $_POST['form-question-5-5-wardrobe'] : 'Не указано';
$answer6_wardrobe = isset($_POST['form-question-6-wardrobe']) ? $_POST['form-question-6-wardrobe'] : 'Не указано';

// Заголовки письма
$headers = "MIME-Version: 1.0\r\n";
$from     = 'info@xn--62-6kca7ahoms.xn--p1ai';
$fromName = 'Мозаика62.рф';
$headers .= "From: =?UTF-8?B?" . base64_encode($fromName) . "?= <$from>\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";

// Формируем тело письма
$email_body = "
    <h3>Новая заявка с Квиза (Шкаф) с сайта мозаика62.рф</h3>
    <p><strong>Имя:</strong> " . $name . "</p>
    <p><strong>Телефон:</strong> " . $phone . "</p>
    <p><strong>Способы связи:</strong> " . $contact_methods_str . "</p>
    <hr>
    <h4>Параметры шкафа:</h4>
    <p><strong>Тип шкафа:</strong> " . $answer1_wardrobe . "</p>
    <p><strong>Тип дверей:</strong> " . $answer2_wardrobe . "</p>
    <p><strong>Материал фасада:</strong> " . $answer3_wardrobe . "</p>
    <p><strong>Ширина шкафа:</strong> " . $widths_str . "</p>
    <p><strong>Количество дверей:</strong> " . $doors_str . "</p>
    <p><strong>Бюджет:</strong> " . $answer55_wardrobe . "</p>
    <p><strong>Специальное предложение:</strong> " . $answer6_wardrobe . "</p>
";

/* Проверяем что заполнено поле с телефоном */
if ($_POST && $phone) {
    // Отправляем письмо
    mail(
        "mozaika62@bk.ru, vasilyev-r@mail.ru, vasilyev-r@yandex.ru",
        // "sidorov-vv3@mail.ru, vasilyev-r@mail.ru, vasilyev-r@yandex.ru",
        // "sidorov-vv3@mail.ru",
        "Заявка с Квиза (Шкаф) с сайта мозаика62.рф",
        $email_body,
        $headers
    );
    
    $_SESSION['win'] = 1;
	$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в салон кухонь «Мозаика». Мы ответим Вам в&#160;ближайшее время.</p>';
    header("Location: " . $_SERVER['HTTP_REFERER']);
} else {
    // Если поле с телефоном НЕ заполнено
    $_SESSION['win'] = 1;
    $_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
?>