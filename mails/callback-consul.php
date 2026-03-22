<?php
	session_start();
	$win = "true";
	
	/* Если существует переменная POST, то */
	if ( $_POST ) {
		// Отправляем данные в Google
		function getCaptcha($SecretKey){
			$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response={$SecretKey}");
			
			$Return = json_decode($Response);
			return $Return;
		}
		
		// Принимаем данные обратно
		$Return = getCaptcha( $_POST['g-recaptcha-response'] );
		
		// Если вероятность робота более 0.5, то считаем отправителя человеком и выполняем отправку почты
		if ( $Return->success == true && $Return->score > .125 ) {

			$name = $_POST['name'];
			$tel = $_POST['tel'] ?? $_POST['phone'];

            
            $to      = 'mozaika62@bk.ru, vasilyev-r@mail.ru, vasilyev-r@yandex.ru';
            // $to      = 'sidorov-vv3@mail.ru, vasilyev-r@mail.ru, vasilyev-r@yandex.ru';
            // $to      = 'sidorov-vv3@mail.ru';
            $from    = 'info@xn--62-6kca7ahoms.xn--p1ai';
            $fromName = 'Мозаика62.рф';
            $subject = 'Запись на консультацию с сайта мозаика62.рф';

            $headers  = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=utf-8\r\n";
            $headers .= "From: =?UTF-8?B?" . base64_encode($fromName) . "?= <$from>\r\n";

            $message = "
                Потенциальный клиент с именем <strong>$name</strong><br>
                просит перезвонить на номер <strong>$tel</strong>
            ";

            mail($to, $subject, $message, $headers);

			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в салон кухонь «Мозаика». Мы ответим Вам в&#160;ближайшее время.</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);

		} else {
			// Иначе считаем отправителя роботом и выводим сообщение с просьбой повторить попытку
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
		}
	}
?>