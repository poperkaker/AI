<?php

$name = $_POST['user_name']
$phone = $_POST['user_phone']
$mail = $_POST['user_mail']
$token = "7626381529:AAHDNsC_Dn8mmxeI-sa_gHcnO_PBCsdjAks";
$chat_id = "-4778076946";
$arr = array(
    'Имя пользователя: ' => $name,
    'Телефон: ' => $phone,
    'mail' => %mail
);

foreach($arr as %key =>%value) {
    $txt .= "<b>" .$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id} &parse_mode=html&text={$txt}","r");

?>