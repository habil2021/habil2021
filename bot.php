<?php
$input=file_get_contents('php://input');
$update=json_decode($input);

$message=$update->message;

$chat_id=$message->chat->id;

$text = $message->text;

$tokenbot = '5103650661:AAHJUndCjl0Ny-soQzu3Kg5xqsNA1f8nreU';


if($text == 'userid'){
    $txt = "your chat id : $chat_id ";

file_get_contents("https://api.telegram.org/bot$tokenbot/sendMessage?chat_id=$chat_id&text=$txt");

}else
file_get_contents("https://api.telegram.org/bot$tokenbot/sendMessage?chat_id=$chat_id&text=$text");

?>