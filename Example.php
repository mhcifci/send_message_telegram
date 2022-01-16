<?php 

require '../ClassTelegram.php';


$token = "YOUR_BOT_TOKEN"; // Required!
$channelID = "YOUT_CHANNEL_ID";

$telegram = new ClassTelegram($token, $channelID);
$telegram->sendMessage("Type the message you want to send!", $channelID);