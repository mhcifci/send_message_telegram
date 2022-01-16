<?php 

require '../ClassTelegram.php';


$token = "YOUR_BOT_TOKEN"; // Required!
$channelID = "YOUR_CHANNEL_ID"; // Required!

$telegram = new ClassTelegram($token, $channelID);
$telegram->sendMessage("Type the message you want to send!", $channelID);