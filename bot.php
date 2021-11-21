<?php

#------------- GG BRO -------------

$botToken = "2085048482:AAEM9d207oMUsSI9iB2kEKgIpybl5sfonLg"
$website = "https://api.telegram.org/bot".$botToken;
error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];

if ((strpos($message, "!start") === 0)||(strpos($message, "/start") === 0)){
sendMessage($chatId, "<i><b>HEYA!!!!!</b></i>
My following Commands:

Test ->> chrck 
chk ->> Chrck

");
}

function sendMessage ($chatId, $message){

$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";

file_get_contents($url);      
}

?>
