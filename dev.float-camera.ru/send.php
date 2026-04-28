<?php
// Впишите сюда вашу почту
$to = "float-camera@mail.ru"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $phone = strip_tags(trim($_POST["phone"]));
    
    // Проверка галочки согласия
    if (!isset($_POST['agree'])) {
        die("Ошибка: Вы не дали согласие на обработку данных.");
    }

    $subject = "Заявка с сайта Float-Camera";
    $message = "Имя: $name\nТелефон: $phone";
    $headers = "From: no-reply@float-camera.ru\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    if (mail($to, $subject, $message, $headers)) {
        // Перенаправление на страницу благодарности или обратно
        echo "<script>alert('Спасибо! Ваша заявка отправлена.'); window.location.href = 'index.html';</script>";
    } else {
        echo "Ошибка отправки сообщения.";
    }
}
?>