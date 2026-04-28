<?php

setlocale(LC_ALL, 'ru_RU.CP1251', 'rus_RUS.CP1251', 'Russian_Russia.1251');
header('Content-Type: text/html; charset=windows-1251');


$flag = file_get_contents ("flag.txt");


if ($flag<time()-86400) {


$emailtext = file_get_contents ("text.txt");

$emails = file ("emails.txt");



for ($i=0; $i<sizeof($emails); $i++) {

$emails[$i] = trim($emails[$i]);

if (strlen($emails[$i])>5) {
$mail_msg = "

$emailtext


__________________________________

http://float-camera.ru/
Тел. 8-800-333-48-70 (звонок по России бесплатный)
         8-927-252-83-67
         8-927-253-51-51
E-mail: float-camera@mail.ru
";

mail($emails[$i],

"Приглашение на выставку, Экспоцентр, декабрь 2014",

"$mail_msg", 
"Return-path: <float-camera@mail.ru>\n".
"From: <float-camera@mail.ru>\n".
"Content-Type: text/plain; charset=windows-1251\n".
"Content-Transfer-Encoding: 8bit\n".
"Date: ".date("r")."\n".
"X-Mailer: my_sender\n");

echo $emails[$i]." - отправлено<br>\n";

}


}

echo "<h1>Рассылка завершена</h1>";
$fp = fopen('flag.txt', 'w');
$test = fwrite($fp, time());
fclose($fp);


} else {


echo "<h1>Рассылка сегодня уже производилась</h1>";

}




?>