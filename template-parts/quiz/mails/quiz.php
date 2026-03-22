<?php
session_start();

// Определяем ветку квиза
$branch = isset($_POST['form-branch']) ? $_POST['form-branch'] : '';

// Общие данные
$answer1 = isset($_POST['form-question-1']) ? $_POST['form-question-1'] : 'Не указано';
$name = isset($_POST['form-name']) ? $_POST['form-name'] : '';
$phone = isset($_POST['form-phone']) ? $_POST['form-phone'] : '';

// Способы связи
$contact_methods = array();
if (isset($_POST['form-answer-final-1']) && $_POST['form-answer-final-1']) 
    $contact_methods[] = $_POST['form-answer-final-1'];
if (isset($_POST['form-answer-final-2']) && $_POST['form-answer-final-2']) 
    $contact_methods[] = $_POST['form-answer-final-2'];
if (isset($_POST['form-answer-final-3']) && $_POST['form-answer-final-3']) 
    $contact_methods[] = $_POST['form-answer-final-3'];
if (isset($_POST['form-answer-final-4']) && $_POST['form-answer-final-4']) 
    $contact_methods[] = $_POST['form-answer-final-4'];
$contact_methods_str = !empty($contact_methods) ? implode(', ', $contact_methods) : 'Не выбрано';

// Формируем тело письма
$email_body = "
    <h3>Новая заявка с Квиза с сайта мозаика62.рф</h3>
    <p><strong>Имя:</strong> " . $name . "</p>
    <p><strong>Телефон:</strong> " . $phone . "</p>
    <p><strong>Способы связи:</strong> " . $contact_methods_str . "</p>
    <hr>
    <p><strong>Тип мебели:</strong> " . $answer1 . "</p>
";

// ВЕТКА КУХНЯ
if ($branch === 'kitchen') {
    $answer2_kitchen = isset($_POST['form-question-2-kitchen']) ? $_POST['form-question-2-kitchen'] : 'Не указано';
    
    $features = array();
    if (isset($_POST['form-answer-3-kitchen-1']) && $_POST['form-answer-3-kitchen-1']) 
        $features[] = $_POST['form-answer-3-kitchen-1'];
    if (isset($_POST['form-answer-3-kitchen-2']) && $_POST['form-answer-3-kitchen-2']) 
        $features[] = $_POST['form-answer-3-kitchen-2'];
    if (isset($_POST['form-answer-3-kitchen-3']) && $_POST['form-answer-3-kitchen-3']) 
        $features[] = $_POST['form-answer-3-kitchen-3'];
    $features_str = !empty($features) ? implode(', ', $features) : 'Не выбрано';
    
    // Размер кухни
    $kitchen_size = isset($_POST['form-kitchen-size']) ? $_POST['form-kitchen-size'] : 'Не указано';
    
    $answer5_kitchen = isset($_POST['form-question-5-kitchen']) ? $_POST['form-question-5-kitchen'] : 'Не указано';
    $answer6_kitchen = isset($_POST['form-question-6-kitchen']) ? $_POST['form-question-6-kitchen'] : 'Не указано';
    $answer65_kitchen = isset($_POST['form-question-6-5-kitchen']) ? $_POST['form-question-6-5-kitchen'] : 'Не указано';
    $answer7_kitchen = isset($_POST['form-question-7-kitchen']) ? $_POST['form-question-7-kitchen'] : 'Не указано';
    
    $email_body .= "
        <h4>Параметры кухни:</h4>
        <p><strong>Планировка:</strong> " . $answer2_kitchen . "</p>
        <p><strong>Дополнительные особенности:</strong> " . $features_str . "</p>
        <p><strong>Размеры кухни:</strong> " . $kitchen_size . "</p>
        <p><strong>Стиль:</strong> " . $answer5_kitchen . "</p>
        <p><strong>Материал фасада:</strong> " . $answer6_kitchen . "</p>
        <p><strong>Бюджет:</strong> " . $answer65_kitchen . "</p>
        <p><strong>Специальное предложение:</strong> " . $answer7_kitchen . "</p>
    ";
}

// ВЕТКА ШКАФ
elseif ($branch === 'wardrobe') {
    $answer2_wardrobe = isset($_POST['form-question-2-wardrobe']) ? $_POST['form-question-2-wardrobe'] : 'Не указано';
    $answer3_wardrobe = isset($_POST['form-question-3-wardrobe']) ? $_POST['form-question-3-wardrobe'] : 'Не указано';
    $answer4_wardrobe = isset($_POST['form-question-4-wardrobe']) ? $_POST['form-question-4-wardrobe'] : 'Не указано';
    
    $widths = array();
    for ($i = 1; $i <= 10; $i++) {
        if (isset($_POST['form-answer-5-wardrobe-' . $i]) && $_POST['form-answer-5-wardrobe-' . $i]) {
            $widths[] = $_POST['form-answer-5-wardrobe-' . $i];
        }
    }
    $widths_str = !empty($widths) ? implode(', ', $widths) : 'Не указано';
    
    $doors = array();
    for ($i = 1; $i <= 6; $i++) {
        if (isset($_POST['form-answer-6-wardrobe-' . $i]) && $_POST['form-answer-6-wardrobe-' . $i]) {
            $doors[] = $_POST['form-answer-6-wardrobe-' . $i];
        }
    }
    $doors_str = !empty($doors) ? implode(', ', $doors) : 'Не указано';
    
    $answer65_wardrobe = isset($_POST['form-question-6-5-wardrobe']) ? $_POST['form-question-6-5-wardrobe'] : 'Не указано';
    $answer7_wardrobe = isset($_POST['form-question-7-wardrobe']) ? $_POST['form-question-7-wardrobe'] : 'Не указано';
    
    $email_body .= "
        <h4>Параметры шкафа:</h4>
        <p><strong>Тип шкафа:</strong> " . $answer2_wardrobe . "</p>
        <p><strong>Тип дверей:</strong> " . $answer3_wardrobe . "</p>
        <p><strong>Материал фасада:</strong> " . $answer4_wardrobe . "</p>
        <p><strong>Ширина шкафа:</strong> " . $widths_str . "</p>
        <p><strong>Количество дверей:</strong> " . $doors_str . "</p>
        <p><strong>Бюджет:</strong> " . $answer65_wardrobe . "</p>
        <p><strong>Специальное предложение:</strong> " . $answer7_wardrobe . "</p>
    ";
}

// ВЕТКА ДРУГОЕ
elseif ($branch === 'other') {
    $description = isset($_POST['form-question-2-other-description']) ? $_POST['form-question-2-other-description'] : 'Не указано';
    $email_body .= "
        <h4>Описание изделия:</h4>
        <p>" . nl2br($description) . "</p>
    ";
}

// Проверяем телефон
if ($_POST && $phone) {
    
    $to = "mozaika62@bk.ru, vasilyev-r@mail.ru, vasilyev-r@yandex.ru";
    // $to = "sidorov-vv3@mail.ru, vasilyev-r@mail.ru, vasilyev-r@yandex.ru";
    // $to = "sidorov-vv3@mail.ru";
    
    $subject = "Заявка с Квиза с сайта мозаика62.рф - " . $answer1;
    
    $has_file = false;
    $file_name = '';
    $file_tmp = '';
    $file_type = '';
    
    if (isset($_FILES['file']) && isset($_FILES['file']['tmp_name'])) {
        if (is_array($_FILES['file']['tmp_name'])) {
            if (isset($_FILES['file']['error'][0]) && $_FILES['file']['error'][0] == UPLOAD_ERR_OK) {
                $has_file = true;
                $file_name = $_FILES['file']['name'][0];
                $file_tmp = $_FILES['file']['tmp_name'][0];
                $file_type = $_FILES['file']['type'][0];
            }
        } 
    }
    
    if ($has_file) {
        $email_body .= "<p><strong>Прикреплен файл:</strong> " . htmlspecialchars($file_name) . "</p>";
    }
    
    // ==========================================
    // ОТПРАВКА ПИСЬМА
    // ==========================================
    
    if ($has_file && file_exists($file_tmp)) {
        $boundary = md5(time());
        
        $from     = 'info@xn--62-6kca7ahoms.xn--p1ai';
        $fromName = 'Мозаика62.рф';
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "From: =?UTF-8?B?" . base64_encode($fromName) . "?= <$from>\r\n";
        $headers .= "Reply-To: $from\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"{$boundary}\"\r\n";
        
        $message = "--{$boundary}\r\n";
        $message .= "Content-Type: text/html; charset=utf-8\r\n";
        $message .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
        $message .= $email_body . "\r\n\r\n";
        
        // Прикрепляем файл
        $file_content = chunk_split(base64_encode(file_get_contents($file_tmp)));
        $message .= "--{$boundary}\r\n";
        $message .= "Content-Type: {$file_type}; name=\"{$file_name}\"\r\n";
        $message .= "Content-Transfer-Encoding: base64\r\n";
        $message .= "Content-Disposition: attachment; filename=\"{$file_name}\"\r\n\r\n";
        $message .= $file_content . "\r\n";
        $message .= "--{$boundary}--";
        
        $mail_sent = mail($to, $subject, $message, $headers);
    } 
    // Обычное письмо без файла
    else {
        $from     = 'info@xn--62-6kca7ahoms.xn--p1ai';
        $fromName = 'Мозаика62.рф';
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "From: =?UTF-8?B?" . base64_encode($fromName) . "?= <$from>\r\n";
        $headers .= "Reply-To: $from\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";

        $mail_sent = mail($to, $subject, $email_body, $headers);
    }
    
    $_SESSION['win'] = 1;
    $_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в салон кухонь «Мозаика». Мы ответим Вам в&#160;ближайшее время.</p>';
    header("Location: " . $_SERVER['HTTP_REFERER']);
} else {
    $_SESSION['win'] = 1;
    $_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
?>